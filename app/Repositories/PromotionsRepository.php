<?php

namespace App\Repositories;

use App\Models\Promotion;

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
}
