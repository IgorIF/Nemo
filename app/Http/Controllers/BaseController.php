<?php

namespace App\Http\Controllers;

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
use Illuminate\Support\Collection;


class BaseController extends Controller
{
    protected string $template;        //шаблон
    protected array $vars = [];       //массив с данными которые передаюся в шаблон

    protected TextsRepository $textsRepository;
    protected TrainersRepository $trainersRepository;
    protected SecurityCategoriesRepository $securityCategoriesRepository;
    protected SecurityItemsRepository $securityItemsRepository;
    protected VideosRepository $videosRepository;
    protected RuleCategoriesRepository $ruleCategoriesRepository;
    protected RuleItemsRepository $ruleItemsRepository;
    protected MedicalCertificatesRepository $medicalCertificatesRepository;
    protected VacanciesRepository $vacanciesRepository;
    protected ImagesRepository $imagesRepository;
    protected FilialsRepository $filialsRepository;
    protected PromotionsRepository $promotionsRepository;
    protected CalculatorDescriptionsRepository $calculatorDescriptionsRepository;

    protected string $headerView;
    protected string $swimBeforeWalkingView;

    protected string $aboutUsView;
    protected string $theBenefitsOfEarlySwimmingView;
    protected string $whoSwimsWithUsView;
    protected string $trainersView;
    protected string $pricesView;
    protected string $promotionsView;
    protected string $swimNeverNotEarlyView;
    protected string $howWeSwimView;
    protected string $securityView;
    protected string $reviewsView;
    protected string $swimmingPoolView;
    protected string $footerView;
    protected string $trialLessonView;
    protected string $rulesView;
    protected string $medicalCertificatesView;
    protected string $contactUsView;
    protected string $vacanciesView;
    protected string $cardPaymentProcessView;

    protected Collection $texts;
    protected Collection $images;
    protected Collection $videos;
    protected Collection $filials;
    private Collection $trainers;
    private Collection $securityCategories;
    private Collection $ruleCategories;
    private Collection $medicalCertificates;
    private Collection $vacancies;
    private Collection $promotions;
    protected string $calculatorDescriptions;

    public function __construct(TextsRepository $textsRepository, TrainersRepository $trainersRepository, SecurityCategoriesRepository $securityCategoriesRepository,
                                SecurityItemsRepository $securityItemsRepository, VideosRepository $videosRepository, RuleCategoriesRepository $ruleCategoriesRepository,
                                RuleItemsRepository $ruleItemsRepository, MedicalCertificatesRepository $medicalCertificatesRepository, VacanciesRepository $vacanciesRepository,
                                ImagesRepository $imagesRepository, FilialsRepository $filialBranchesRepository, PromotionsRepository $promotionsRepository, CalculatorDescriptionsRepository $calculatorDescriptionsRepository) {
        $this->textsRepository = $textsRepository;
        $this->trainersRepository = $trainersRepository;
        $this->securityCategoriesRepository = $securityCategoriesRepository;
        $this->securityItemsRepository = $securityItemsRepository;
        $this->videosRepository = $videosRepository;
        $this->ruleCategoriesRepository = $ruleCategoriesRepository;
        $this->ruleItemsRepository = $ruleItemsRepository;
        $this->medicalCertificatesRepository = $medicalCertificatesRepository;
        $this->vacanciesRepository = $vacanciesRepository;
        $this->imagesRepository = $imagesRepository;
        $this->filialsRepository = $filialBranchesRepository;
        $this->promotionsRepository = $promotionsRepository;
        $this->calculatorDescriptionsRepository = $calculatorDescriptionsRepository;
    }

    protected function getTextsData() {
        $this->texts = $this->textsRepository->getAllWithIdAsKey();
    }

    protected function getImagesData() {
        $this->images = $this->imagesRepository->getAllWithIdAsKey();
    }

    protected function getVideosData() {
        $this->videos = $this->videosRepository->getAllWithIdAsKey();
    }

    protected function getFilialsData() {
        $this->filials = $this->filialsRepository->getAllWithIdAsKey();
    }

    protected function getTrainersData() {
        $this->trainers = $this->trainersRepository->getAll();
    }

    protected function getSecurityCategoriesData() {
        $this->securityCategories = $this->securityCategoriesRepository->getAll();
    }

    protected function getRuleCategoriesData() {
        $this->ruleCategories = $this->ruleCategoriesRepository->getAll();
    }

    protected function getMedicalCertificatesData() {
        $this->medicalCertificates = $this->medicalCertificatesRepository->getAll();
    }

    protected function getVacanciesData() {
        $this->vacancies = $this->vacanciesRepository->getAll();
    }

    protected function getPromotionsData() {
        $this->promotions = $this->promotionsRepository->getAll();
    }

    protected function getCalculatorDescriptionsData() {
        $this->calculatorDescriptions = $this->calculatorDescriptionsRepository->getAllInJson();
    }

    protected function renderHeader(): string {
        $texts = $this->getFromCollection($this->texts, [1 => 2]);
        return view( $this->template . '.header')->with(['texts' => $texts, 'filials' => $this->filials])->render();
    }

    protected function renderSwimBeforeWalking(): string {
        $texts = $this->getFromCollection($this->texts, [3 => 4]);
        return view($this->template . '.swim_before_walking')->with('texts', $texts)->render();
    }

    protected function renderAboutUs(): string {
        $texts = $this->getFromCollection($this->texts, [5 => 6]);
        $video = $this->getFromCollection($this->videos, [1 => 1])->first();
        return view( $this->template . '.about_us')->with(['texts' => $texts, 'video' => $video])->render();
    }

    protected function renderTheBenefitsOfEarlySwimming(): string {
        $texts = $this->getFromCollection($this->texts, [10 => 22]);
        $images = $this->getFromCollection($this->images, [2 => 2]);
        return view($this->template . '.the_benefits_of_early_swimming')->with(['texts' => $texts, 'images' => $images])->render();
    }

    protected function renderWhoSwimsWithUs(): string {
        $texts = $this->getFromCollection($this->texts, [23 => 32]);
        $images = $this->getFromCollection($this->images, [3 => 5]);
        return view($this->template . '.who_swims_with_us')->with(['texts' => $texts, 'images' => $images])->render();
    }

    protected function renderTrainers(): string {
        $texts = $this->getFromCollection($this->texts, [33 => 34]);
        return view($this->template . '.trainers')->with(['trainers' => $this->trainers, 'texts' => $texts])->render();
    }

    protected function renderPrices(): string {
        $texts = $this->getFromCollection($this->texts, [35 => 35]);
        return view($this->template . '.prices')->with(['texts' => $texts, 'filials' => $this->filials, 'calculatorDescriptions' => $this->calculatorDescriptions])->render();
    }

    protected function renderPromotions(): string {
        $texts = $this->getFromCollection($this->texts, [67 => 67]);
        return view($this->template . '.promotions')->with(['texts' => $texts, 'promotions' => $this->promotions])->render();
    }

    protected function renderSwimNeverNotEarly(): string {
        $texts = $this->getFromCollection($this->texts, [36 => 37]);
        $images = $this->getFromCollection($this->images, [6 => 6]);
        return view($this->template . '.swim_never_not_early')->with(['texts' => $texts, 'images' => $images])->render();
    }

    protected function renderHowWeSwim(): string {
        return view($this->template . '.how_we_swim')->render();
    }

    protected function renderSecurity(): string {
        $texts = $this->getFromCollection($this->texts, [38 => 39]);
        $images = $this->getFromCollection($this->images, [7 => 9]);
        return view($this->template . '.security')->with(['texts' => $texts, 'securityCategories' => $this->securityCategories, 'images' => $images])->render();
    }

    protected function renderReviews(): string {
        $texts = $this->getFromCollection($this->texts, [40 => 40]);
        $videos = $this->getFromCollection($this->videos, [2 => count($this->videos)-1]);
        return view($this->template . '.reviews')->with(['texts' => $texts, 'videos' => $videos])->render();
    }

    protected function renderSwimmingPool(): string {
        $texts = $this->getFromCollection($this->texts, [41 => 46]);
        return view($this->template . '.swimming_pool')->with('texts', $texts)->render();
    }

    protected function renderFooter(): string {
        $texts = $this->getFromCollection($this->texts, [47 => 55]);
        return view($this->template . '.footer')->with(['texts' => $texts, 'filials' => $this->filials])->render();
    }

    protected function renderTrialLesson(): string {
        $texts = $this->getFromCollection($this->texts, [56 => 56]);
        return view($this->template . '.trial_lesson')->with('texts' , $texts)->render();
    }

    protected function renderRules(): string {
        $texts = $this->getFromCollection($this->texts, [57 => 59]);
        return view($this->template . '.rules')->with(['texts' => $texts, 'ruleCategories' => $this->ruleCategories])->render();
    }

    protected function renderMedicalCertificates(): string {
        $texts = $this->getFromCollection($this->texts, [60 => 61]);
        return view($this->template . '.medical_certificates')->with(['texts' => $texts, 'medicalCertificates' => $this->medicalCertificates])->render();
    }

    protected function renderContactUs(): string {
        $texts = $this->getFromCollection($this->texts, [66 => 66]);
        return view($this->template . '.contact_us')->with(['texts' => $texts, 'filialBranches' => $this->filials])->render();
    }

    protected function renderVacancies(): string {
        $texts = $this->getFromCollection($this->texts, [62 => 65]);
        return view($this->template . '.vacancies')->with(['texts' => $texts, 'vacancies' => $this->vacancies])->render();
    }

    protected function renderCardPaymentProcess(): string {
        $texts = $this->getFromCollection($this->texts, [69 => 70]);
        return view($this->template . '.card_payment_process')->with('texts', $texts)->render();
    }

    protected function getFromCollection(Collection $collection, array $interval): Collection
    {
        $result = collect();

        foreach ($interval as $from => $to) {
            for ($i = $from; $i <= $to; $i++) {
                $result->put($i, $collection->get($i));
            }
        }

        return $result;
    }
}
