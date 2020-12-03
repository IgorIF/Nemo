<?php


namespace App\Repositories;

use App\Models\Trainer;

class TrainersRepository extends Repository
{
    public function __construct(Trainer $trainer)
    {
        $this->model = $trainer;
    }

    public function getAll() {
        return Trainer::all();
    }
}
