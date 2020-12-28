<?php


namespace App\Repositories;


class Repository
{
    protected $model = false;

    public function getOneTextById($id) {
        return $this->model->where('id', $id)->first()->text;
    }

    public function getInRangeById($from, $to) {
        return $this->model->where('id', '>=', $from)->where('id', '<=', $to)->get();
    }
}
