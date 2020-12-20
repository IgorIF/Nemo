<?php


namespace App\Repositories;


class Repository
{
    protected $model = false;

    public function getOneTextByName($name) {
        return $this->model->where('name', $name)->first()->text;
    }
}
