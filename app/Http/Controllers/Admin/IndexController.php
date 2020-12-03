<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\TrainersRepository;
use Illuminate\Http\Request;

class IndexController extends AdminController
{

    /**
     * IndexController constructor.
     * @param TrainersRepository $trainersRepository
     */
    public function __construct(TrainersRepository $trainersRepository)
    {
        $this->trainersRepository = $trainersRepository;
    }

    public function index() {
        $trainers = $this->getTrainers();

        return $this->renderOutput();
    }

    private function getTrainers() {
        $trainers = $this->trainersRepository->getAll();

        dd($trainers);
    }
}
