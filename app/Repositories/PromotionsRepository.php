<?php

namespace App\Repositories;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionsRepository extends Repository
{
    public function __construct(Promotion $promotion)
    {
        $this->model = $promotion;
        $this->imagePath = 'images/promotions/';
    }

    public function textUpdate(array $data, int $id)
    {
        $promotion = $this->model::find($id);
        $promotion->fill([$data['field'] => $data['text']])->update();
    }

    public function delete(int $id)
    {
        $promotion = $this->model::find($id);
        $this->deleteImage('public/' . $this->imagePath . $promotion->image);
        $promotion->delete();
    }

    public function create(Request $request)
    {
        $data = $request->all();

        $data['image-data'] = json_decode($data['image-data'], true);
        $data['image-data'] = $this->roundImageData($data['image-data']);

        $fileName = $this->cropAndSaveImage($data['image'], $data['image-data'], 'storage/' . $this->imagePath);

        return $this->model::create([
            'name' => $data['name'],
            'percent' => $data['percent'],
            'image' => $fileName
        ]);
    }
}
