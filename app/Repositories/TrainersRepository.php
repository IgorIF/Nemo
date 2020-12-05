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

    public function destroyTrainer($id)
    {
        $trainer = Trainer::find($id);
        $trainer->delete();
    }
}
