<?php

namespace App\Http\Controllers;

use App\Mail\TrialLesson;
use App\Repositories\TrainersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function sendMail(Request $request){

        $data = $request->except('_token');

        $address = '';

        switch ($data['select_pool']) {
            case 1:
                $data['select_pool'] = 'Пражская';
                $address = 'aquaclubnemo@yandex.ru';
                break;
            case 2:
                $data['select_pool'] = 'Академическая';
                $address = 'aquanemoclub@yandex.ru';
                break;
            case 3:
                $data['select_pool'] = 'Марьино';
                $address = 'aquaclubnemo.m@yandex.ru';
                break;
            case 4:
                $data['select_pool'] = 'Некрасовка';
                $address = 'aquaclubnemo.l@yandex.ru';
                break;
        }

        Mail::to($address)->send(new TrialLesson($data));
        return redirect('/');
    }
}
