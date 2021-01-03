<?php


namespace App\Repositories;


class Repository
{
    protected $model = false;

    public function getOneById($id) {
        return $this->model->where('id', $id)->first();
    }

    public function getInRangeById($intervals) {

        $result = collect();

        foreach ($intervals as $from => $to) {
            $query = $this->model->where('id', '>=', $from)->where('id', '<=', $to)->get();
            $result = $result->merge($query);
        }
        return $result;
    }

    public function getAll() {
        return $this->model->all();
    }
}
