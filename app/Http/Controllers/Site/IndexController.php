<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\BaseController;
use App\Mail\TrialLesson;
use App\Repositories\CalculatorDescriptionsRepository;
use App\Repositories\FilialsRepository;
use App\Repositories\ImagesRepository;
use App\Repositories\MedicalCertificatesRepository;
use App\Repositories\NumberOfLessonsRepository;
use App\Repositories\PoolsRepository;
use App\Repositories\PromotionsRepository;
use App\Repositories\ReviewsRepository;
use App\Repositories\RuleCategoriesRepository;
use App\Repositories\RuleItemsRepository;
use App\Repositories\SecurityCategoriesRepository;
use App\Repositories\SecurityItemsRepository;
use App\Repositories\SubscriptionsRepository;
use App\Repositories\TextsRepository;
use App\Repositories\TrainersRepository;
use App\Repositories\VacanciesRepository;
use App\Repositories\VideosRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class IndexController extends BaseController
{
    public function __construct(TextsRepository $textsRepository, TrainersRepository $trainersRepository, SecurityCategoriesRepository $securityCategoriesRepository,
                                SecurityItemsRepository $securityItemsRepository, VideosRepository $videosRepository, RuleCategoriesRepository $ruleCategoriesRepository,
                                RuleItemsRepository $ruleItemsRepository, MedicalCertificatesRepository $medicalCertificatesRepository, VacanciesRepository $vacanciesRepository,
                                ImagesRepository $imagesRepository, FilialsRepository $filialBranchesRepository, PromotionsRepository $promotionsRepository, CalculatorDescriptionsRepository $calculatorDescriptionsRepository,
                                PoolsRepository $poolsRepository, SubscriptionsRepository $subscriptionsRepository, NumberOfLessonsRepository $numberOfLessonsRepository, ReviewsRepository $reviewsRepository)
    {
        parent::__construct($textsRepository, $trainersRepository, $securityCategoriesRepository, $securityItemsRepository,  $videosRepository,
                            $ruleCategoriesRepository, $ruleItemsRepository, $medicalCertificatesRepository, $vacanciesRepository, $imagesRepository,
                            $filialBranchesRepository, $promotionsRepository, $calculatorDescriptionsRepository, $poolsRepository, $subscriptionsRepository, $numberOfLessonsRepository, $reviewsRepository);
        $this->template = 'site.main';
    }

    public function __invoke(Request $request): string {
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
        $this->getPoolsData();
        $this->getSubscriptionsData();
        $this->getNumberOfLessonsData();
        $this->getReviewsData();
        return $this->renderOutput();
    }

    protected function renderOutput(): string {

        $this->vars = Arr::add($this->vars, 'header', $this->renderHeader());
        $this->vars = Arr::add($this->vars, 'offer', $this->renderOffer());
        $this->vars = Arr::add($this->vars, 'about', $this->renderAbout());
        $this->vars = Arr::add($this->vars, 'gallery', $this->renderGallery());
        $this->vars = Arr::add($this->vars, 'coaches', $this->renderCoaches());
        $this->vars = Arr::add($this->vars, 'payment', $this->renderPayment());
        $this->vars = Arr::add($this->vars, 'sale', $this->renderSale());
        $this->vars = Arr::add($this->vars, 'what', $this->renderWhat());
        $this->vars = Arr::add($this->vars, 'waterTreatment', $this->renderWaterTreatment());
        $this->vars = Arr::add($this->vars, 'reviews', $this->renderReviews());
        $this->vars = Arr::add($this->vars, 'questions', $this->renderQuestions());
        $this->vars = Arr::add($this->vars, 'addresses', $this->renderAddresses());
        $this->vars = Arr::add($this->vars, 'footer', $this->renderFooter());
        $this->vars = Arr::add($this->vars, 'signUpModal', $this->renderSignUpModal());
        $this->vars = Arr::add($this->vars, 'paymentRulesModal', $this->renderPaymentRulesModal());
        $this->vars = Arr::add($this->vars, 'vacanciesModal', $this->renderVacanciesModal());

        return view($this->template . '.index')->with($this->vars);
    }

    public function sendMail(Request $request){
        $data = $request->except('_token');
        $filial = $this->filialsRepository->getFilialByAlias($data['filial']);
        $data['pool'] = $filial->address;

        Mail::to($filial->email)->send(new TrialLesson($data));
        return redirect('/');
    }
}
