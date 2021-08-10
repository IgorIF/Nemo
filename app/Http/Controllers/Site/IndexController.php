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

        $this->baseVars = Arr::add($this->baseVars, 'header', $this->renderHeader());
        $this->baseVars = Arr::add($this->baseVars, 'offer', $this->renderOffer());
        $this->baseVars = Arr::add($this->baseVars, 'about', $this->renderAbout());
        $this->baseVars = Arr::add($this->baseVars, 'gallery', $this->renderGallery());
        $this->baseVars = Arr::add($this->baseVars, 'coaches', $this->renderCoaches());
        $this->baseVars = Arr::add($this->baseVars, 'payment', $this->renderPayment());
        $this->baseVars = Arr::add($this->baseVars, 'sale', $this->renderSale());
        $this->baseVars = Arr::add($this->baseVars, 'what', $this->renderWhat());
        $this->baseVars = Arr::add($this->baseVars, 'waterTreatment', $this->renderWaterTreatment());
        $this->baseVars = Arr::add($this->baseVars, 'reviews', $this->renderReviews());
        $this->baseVars = Arr::add($this->baseVars, 'questions', $this->renderQuestions());
        $this->baseVars = Arr::add($this->baseVars, 'addresses', $this->renderAddresses());
        $this->baseVars = Arr::add($this->baseVars, 'footer', $this->renderFooter());
        $this->baseVars = Arr::add($this->baseVars, 'signUpModal', $this->renderSignUpModal());
        $this->baseVars = Arr::add($this->baseVars, 'paymentRulesModal', $this->renderPaymentRulesModal());
        $this->baseVars = Arr::add($this->baseVars, 'vacanciesModal', $this->renderVacanciesModal());
        $this->baseVars = Arr::add($this->baseVars, 'paymentModal', $this->renderPaymentModal());

        return view($this->template . '.index')->with($this->baseVars);
    }

    public function sendMail(Request $request){
        $data = $request->except('_token');
        $filial = $this->filialsRepository->getFilialByAlias($data['filial']);
        $data['filial'] = $filial->address;

        Mail::to($filial->email)->send(new TrialLesson($data));
        return redirect('/');
    }
}
