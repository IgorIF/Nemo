<?php

namespace App\Http\Controllers;

use App\Repositories\CalculatorDescriptionsRepository;
use App\Repositories\FilialBranchesRepository;
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
    protected FilialBranchesRepository $filialBranchesRepository;
    protected PromotionsRepository $promotionsRepository;
    protected CalculatorDescriptionsRepository $calculatorDescriptionsRepository;

    protected string $headerView;
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
    protected Collection $filialBranches;
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
                                ImagesRepository $imagesRepository, FilialBranchesRepository $filialBranchesRepository, PromotionsRepository $promotionsRepository, CalculatorDescriptionsRepository $calculatorDescriptionsRepository) {
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
        $this->filialBranchesRepository = $filialBranchesRepository;
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

    protected function getFilialBranchesData() {
        $this->filialBranches = $this->filialBranchesRepository->getAllWithIdAsKey();
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

    protected function renderHeader() {
        $texts = $this->getFromCollection($this->texts, [1 => 7]);
        $images = $this->getFromCollection($this->images, [1 => 1]);
        $this->headerView = view( $this->template . '.header')->with(['texts' => $texts, 'images' => $images, 'filialBranches' => $this->filialBranches])->render();
    }

    protected function renderAboutUs() {
        $texts = $this->getFromCollection($this->texts, [8 => 9]);
        $video = $this->getFromCollection($this->videos, [1 => 1])->first();
        $this->aboutUsView = view( $this->template . '.about_us')->with(['texts' => $texts, 'video' => $video])->render();
    }

    protected function renderTheBenefitsOfEarlySwimming() {
        $texts = $this->getFromCollection($this->texts, [10 => 22]);
        $images = $this->getFromCollection($this->images, [2 => 2]);
        $this->theBenefitsOfEarlySwimmingView = view($this->template . '.the_benefits_of_early_swimming')->with(['texts' => $texts, 'images' => $images])->render();
    }

    protected function renderWhoSwimsWithUs() {
        $texts = $this->getFromCollection($this->texts, [23 => 32]);
        $images = $this->getFromCollection($this->images, [3 => 5]);
        $this->whoSwimsWithUsView = view($this->template . '.who_swims_with_us')->with(['texts' => $texts, 'images' => $images])->render();
    }

    protected function renderTrainers() {
        $texts = $this->getFromCollection($this->texts, [33 => 34]);
        $this->trainersView = view($this->template . '.trainers')->with(['trainers' => $this->trainers, 'texts' => $texts])->render();
    }

    protected function renderPrices() {
        $texts = $this->getFromCollection($this->texts, [35 => 35]);
        $this->pricesView = view($this->template . '.prices')->with(['texts' => $texts, 'filialBranches' => $this->filialBranches, 'calculatorDescriptions' => $this->calculatorDescriptions])->render();
    }

    protected function renderPromotions() {
        $texts = $this->getFromCollection($this->texts, [67 => 67]);
        $this->promotionsView = view($this->template . '.promotions')->with(['texts' => $texts, 'promotions' => $this->promotions])->render();
    }

    protected function renderSwimNeverNotEarly() {
        $texts = $this->getFromCollection($this->texts, [36 => 37]);
        $images = $this->getFromCollection($this->images, [6 => 6]);
        $this->swimNeverNotEarlyView = view($this->template . '.swim_never_not_early')->with(['texts' => $texts, 'images' => $images])->render();
    }

    protected function renderHowWeSwim() {
        $this->howWeSwimView = view($this->template . '.how_we_swim')->render();
    }

    protected function renderSecurity() {
        $texts = $this->getFromCollection($this->texts, [38 => 39]);
        $images = $this->getFromCollection($this->images, [7 => 9]);
        $this->securityView = view($this->template . '.security')->with(['texts' => $texts, 'securityCategories' => $this->securityCategories, 'images' => $images])->render();
    }

    protected function renderReviews() {
        $texts = $this->getFromCollection($this->texts, [40 => 40]);
        $videos = $this->getFromCollection($this->videos, [2 => count($this->videos)-1]);
        $this->reviewsView = view($this->template . '.reviews')->with(['texts' => $texts, 'videos' => $videos])->render();
    }

    protected function renderSwimmingPool() {
        $texts = $this->getFromCollection($this->texts, [41 => 46]);
        $this->swimmingPoolView = view($this->template . '.swimming_pool')->with('texts', $texts)->render();
    }

    protected function renderFooter() {
        $texts = $this->getFromCollection($this->texts, [47 => 55]);
        $this->footerView = view($this->template . '.footer')->with(['texts' => $texts, 'filialBranches' => $this->filialBranches])->render();
    }

    protected function renderTrialLesson() {
        $texts = $this->getFromCollection($this->texts, [56 => 56]);
        $this->trialLessonView = view($this->template . '.trial_lesson')->with('texts' , $texts)->render();
    }

    protected function renderRules() {
        $texts = $this->getFromCollection($this->texts, [57 => 59]);
        $this->rulesView = view($this->template . '.rules')->with(['texts' => $texts, 'ruleCategories' => $this->ruleCategories])->render();
    }

    protected function renderMedicalCertificates() {
        $texts = $this->getFromCollection($this->texts, [60 => 61]);
        $this->medicalCertificatesView = view($this->template . '.medical_certificates')->with(['texts' => $texts, 'medicalCertificates' => $this->medicalCertificates])->render();
    }

    protected function renderContactUs() {
        $texts = $this->getFromCollection($this->texts, [66 => 66]);
        $this->contactUsView = view($this->template . '.contact_us')->with(['texts' => $texts, 'filialBranches' => $this->filialBranches])->render();
    }

    protected function renderVacancies() {
        $texts = $this->getFromCollection($this->texts, [62 => 65]);
        $this->vacanciesView = view($this->template . '.vacancies')->with(['texts' => $texts, 'vacancies' => $this->vacancies])->render();
    }

    protected function renderCardPaymentProcess() {
        $texts = $this->getFromCollection($this->texts, [69 => 70]);
        $this->cardPaymentProcessView = view($this->template . '.card_payment_process')->with('texts', $texts)->render();
    }

    protected function renderOutput() {

        $this->vars = Arr::add($this->vars, 'header', $this->headerView);
        $this->vars = Arr::add($this->vars, 'aboutUs', $this->aboutUsView);
        $this->vars = Arr::add($this->vars, 'theBenefitsOfEarlySwimming', $this->theBenefitsOfEarlySwimmingView);
        $this->vars = Arr::add($this->vars, 'whoSwimsWithUs', $this->whoSwimsWithUsView);
        $this->vars = Arr::add($this->vars, 'trainers', $this->trainersView);
        $this->vars = Arr::add($this->vars, 'prices', $this->pricesView);
        $this->vars = Arr::add($this->vars, 'promotions', $this->promotionsView);
        $this->vars = Arr::add($this->vars, 'swimNeverNotEarly', $this->swimNeverNotEarlyView);
        $this->vars = Arr::add($this->vars, 'howWeSwim', $this->howWeSwimView);
        $this->vars = Arr::add($this->vars, 'security', $this->securityView);
        $this->vars = Arr::add($this->vars, 'reviews', $this->reviewsView);
        $this->vars = Arr::add($this->vars, 'swimmingPool', $this->swimmingPoolView);
        $this->vars = Arr::add($this->vars, 'footer', $this->footerView);
        $this->vars = Arr::add($this->vars, 'trialLesson', $this->trialLessonView);
        $this->vars = Arr::add($this->vars, 'rules', $this->rulesView);
        $this->vars = Arr::add($this->vars, 'medicalCertificates', $this->medicalCertificatesView);
        $this->vars = Arr::add($this->vars, 'contactUs', $this->contactUsView);
        $this->vars = Arr::add($this->vars, 'vacancies', $this->vacanciesView);
        $this->vars = Arr::add($this->vars, 'cardPaymentProcess', $this->cardPaymentProcessView);

        return view($this->template . '.index')->with($this->vars);
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
