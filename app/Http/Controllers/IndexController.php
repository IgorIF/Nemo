<?php

namespace App\Http\Controllers;

use App\Repositories\TrainersRepository;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    /**
     * IndexController constructor.
     */
    public function __construct(TrainersRepository $trainersRepository)
    {
        $this->template = 'site.index';
        $this->trainersRepository = $trainersRepository;
    }


    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $trainers = $this->trainersRepository->getTrainers();

        $this->trainers = view('site.trainers')->with('trainers', $trainers)->render();

        return $this->renderOutput();
    }
}
