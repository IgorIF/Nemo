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
        $this->template = 'admin.index';
        $this->trainersRepository = $trainersRepository;
    }

    public function index() {
        $trainers = $this->getTrainers();

        $this->content = view('admin.content')->with('trainers', $trainers)->render();

        return $this->renderOutput();
    }

    private function getTrainers() {
        $trainers = $this->trainersRepository->getAll();
        return $trainers;
    }
}
