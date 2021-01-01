<?php


namespace App\Repositories;


class Repository
{
    protected $model = false;

    public function getOneById($id) {
        return $this->model->where('id', $id)->first();
    }

    public function getInRangeById($from, $to) {
        return $this->model->where('id', '>=', $from)->where('id', '<=', $to)->get();
    }

    public function getAll() {
        return $this->model->all();
    }
}
