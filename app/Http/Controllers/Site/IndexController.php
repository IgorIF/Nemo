<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\BaseController;
use App\Mail\TrialLesson;
use App\Repositories\ImagesRepository;
use App\Repositories\MedicalCertificatesRepository;
use App\Repositories\RuleCategoriesRepository;
use App\Repositories\RuleItemsRepository;
use App\Repositories\SecurityCategoriesRepository;
use App\Repositories\SecurityItemsRepository;
use App\Repositories\TextsRepository;
use App\Repositories\TrainersRepository;
use App\Repositories\VacanciesRepository;
use App\Repositories\VideosRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends BaseController
{
    public function __construct(TextsRepository $textsRepository, TrainersRepository $trainersRepository, SecurityCategoriesRepository $securityCategoriesRepository,
                                SecurityItemsRepository $securityItemsRepository, VideosRepository $videosRepository, RuleCategoriesRepository $ruleCategoriesRepository,
                                RuleItemsRepository $ruleItemsRepository, MedicalCertificatesRepository $medicalCertificatesRepository, VacanciesRepository $vacanciesRepository, ImagesRepository $imagesRepository)
    {
        $this->initRepositories($textsRepository, $trainersRepository, $securityCategoriesRepository, $securityItemsRepository,  $videosRepository, $ruleCategoriesRepository, $ruleItemsRepository, $medicalCertificatesRepository, $vacanciesRepository, $imagesRepository);
        $this->template = 'site';
    }

    public function __invoke(Request $request)
    {
        parent::__invoke($request);
        return $this->renderOutput();
    }

    protected function renderOutput() {
        return parent::renderOutput();
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
