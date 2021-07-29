<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\BaseController;
use App\Mail\TrialLesson;
use App\Repositories\CalculatorDescriptionsRepository;
use App\Repositories\FilialsRepository;
use App\Repositories\ImagesRepository;
use App\Repositories\MedicalCertificatesRepository;
use App\Repositories\PromotionsRepository;
use App\Repositories\RuleCategoriesRepository;
use App\Repositories\RuleItemsRepository;
use App\Repositories\SecurityCategoriesRepository;
use App\Repositories\SecurityItemsRepository;
use App\Repositories\TextsRepository;
use App\Repositories\TrainersRepository;
use App\Repositories\VacanciesRepository;
use App\Repositories\VideosRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class IndexController extends BaseController
{
    public function __construct(TextsRepository $textsRepository, TrainersRepository $trainersRepository, SecurityCategoriesRepository $securityCategoriesRepository,
                                SecurityItemsRepository $securityItemsRepository, VideosRepository $videosRepository, RuleCategoriesRepository $ruleCategoriesRepository,
                                RuleItemsRepository $ruleItemsRepository, MedicalCertificatesRepository $medicalCertificatesRepository, VacanciesRepository $vacanciesRepository,
                                ImagesRepository $imagesRepository, FilialsRepository $filialBranchesRepository, PromotionsRepository $promotionsRepository, CalculatorDescriptionsRepository $calculatorDescriptionsRepository)
    {
        parent::__construct($textsRepository, $trainersRepository, $securityCategoriesRepository, $securityItemsRepository,  $videosRepository,
                            $ruleCategoriesRepository, $ruleItemsRepository, $medicalCertificatesRepository, $vacanciesRepository, $imagesRepository,
                            $filialBranchesRepository, $promotionsRepository, $calculatorDescriptionsRepository);
        $this->template = 'site.main';
    }

    public function __invoke(Request $request)
    {
        $this->getTextsData();
        $this->getImagesData();
        $this->getFilialsData();
        $this->getVideosData();
        $this->getTrainersData();
        $this->getCalculatorDescriptionsData();
        $this->getPromotionsData();
        $this->getSecurityCategoriesData();
        $this->getRuleCategoriesData();
        $this->getMedicalCertificatesData();
        $this->getVacanciesData();

        return $this->renderOutput();
    }

    protected function renderOutput(): string {

        $this->vars = Arr::add($this->vars, 'header', $this->renderHeader());
        $this->vars = Arr::add($this->vars, 'swimBeforeWalking', $this->renderSwimBeforeWalking());
        $this->vars = Arr::add($this->vars, 'aboutUs', $this->renderAboutUs());
        $this->vars = Arr::add($this->vars, 'howWeSwim', $this->renderHowWeSwim());
        $this->vars = Arr::add($this->vars, 'trainers', $this->renderTrainers());

        return view($this->template . '.index')->with($this->vars);
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
            case 5:
                $data['select_pool'] = 'Речной вокзал';
                $address = 'aquaclubnemo.h@yandex.ru';
        }

        Mail::to($address)->send(new TrialLesson($data));
        return redirect('/');
    }
}
