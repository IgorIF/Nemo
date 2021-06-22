<?php

namespace App\Repositories;

use App\Models\FilialBranch;
use Illuminate\Http\Request;

class FilialBranchesRepository extends Repository
{
    public function __construct(FilialBranch $filialBranch)
    {
        $this->model = $filialBranch;
    }

    public function textUpdate(array $data, int $id)
    {
        $filialBranch = $this->model::find($id);
        $filialBranch->fill([$data['field'] => $data['text']]);
        $filialBranch->update();
    }

    public function priceUpdate(array $data, int $id): string
    {

        $filialBranch = $this->model::find($id);

        $prices = json_decode($filialBranch->prices, true);

        $price = (int)$data['price'];
        $activeFields = $data['data'];

        $pricesIntermediateArr = $prices;
        $linkToPrice = &$prices;

        while (count($activeFields) > 0) {
            foreach ($pricesIntermediateArr as $key => $value) {
                if (in_array($key, $activeFields)) {
                    if (is_array($pricesIntermediateArr[$key])) {
                        $pricesIntermediateArr = $pricesIntermediateArr[$key];
                    }
                    $linkToPrice = &$linkToPrice[$key];
                    unset($activeFields[array_search($key, $activeFields)]);
                    break;
                }
            }
        }

        $linkToPrice = $price;

        $prices = json_encode($prices);

        $filialBranch->fill(['prices' => $prices]);
        $filialBranch->update();

        return $prices;
    }

    public function promotionPriceUpdate(array $data, int $id): string {
        $filialBranch = $this->model::find($id);

        $prices = json_decode($filialBranch->promotion_prices, true);

        $price = (int)$data['price'];
        $activeFields = $data['data'];

        $pricesIntermediateArr = $prices;
        $linkToPrice = &$prices;

        while (count($activeFields) > 0) {
            foreach ($pricesIntermediateArr as $key => $value) {
                if (in_array($key, $activeFields)) {
                    if (is_array($pricesIntermediateArr[$key])) {
                        $pricesIntermediateArr = $pricesIntermediateArr[$key];
                    }
                    $linkToPrice = &$linkToPrice[$key];
                    unset($activeFields[array_search($key, $activeFields)]);
                    break;
                }
            }
        }

        $linkToPrice = $price;

        $prices = json_encode($prices);

        $filialBranch->fill(['promotion_prices' => $prices]);
        $filialBranch->update();

        return $prices;
    }

    public function getFilialByAlias(string $alias): ?FilialBranch
    {
         return $this->model->where('alias', $alias)->first();
    }
}
