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
    protected string $aboutUs;
    protected string $theBenefitsOfEarlySwimming;
    protected string $whoSwimsWithUs;
    protected string $trainersView;
    protected string $pricesView;
    protected string $promotionsView;
    protected string $swimNeverNotEarly;
    protected string $security;
    protected string $reviews;
    protected string $swimmingPool;
    protected string $footer;
    protected string $trialLesson;
    protected string $rules;
    protected string $medicalCertificatesView;
    protected string $contactUs;
    protected string $vacanciesView;

    private Collection $texts;
    private Collection $images;
    protected Collection $videos;
    private Collection $filialBranches;
    private Collection $trainers;
    private Collection $securityCategories;
    private Collection $ruleCategories;
    private Collection $medicalCertificates;
    private Collection $vacancies;
    private Collection $promotions;
    private string $calculatorDescriptions;

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

        $this->texts = $textsRepository->getAllWithIdAsKey();
        $this->images = $imagesRepository->getAllWithIdAsKey();
        $this->videos = $videosRepository->getAllWithIdAsKey();
        $this->filialBranches = $this->filialBranchesRepository->getAllWithIdAsKey();
        $this->trainers = $this->trainersRepository->getAll();
        $this->securityCategories = $this->securityCategoriesRepository->getAll();
        $this->ruleCategories = $this->ruleCategoriesRepository->getAll();
        $this->medicalCertificates = $this->medicalCertificatesRepository->getAll();
        $this->vacancies = $this->vacanciesRepository->getAll();
        $this->promotions = $this->promotionsRepository->getAll();
        $this->calculatorDescriptions = $this->calculatorDescriptionsRepository->getAllInJson();
    }

    public function __invoke(Request $request) {
        $this->renderHeader();
        $this->renderAboutUs();
        $this->renderTheBenefitsOfEarlySwimming();
        $this->renderWhoSwimsWithUs();
        $this->renderTrainers();
        $this->renderPrices();
        $this->renderPromotions();
        $this->renderSwimNeverNotEarly();
        $this->renderSecurity();
        $this->renderReviews();
        $this->renderSwimmingPool();
        $this->renderFooter();
        $this->renderTrialLesson();
        $this->renderRules();
        $this->renderMedicalCertificates();
        $this->renderContactUs();
        $this->renderVacancies();
    }

    protected function renderOutput() {

        $howWeSwim = view($this->template . '.how_we_swim')->render();

        $this->vars = Arr::add($this->vars, 'header', $this->headerView);
        $this->vars = Arr::add($this->vars, 'aboutUs', $this->aboutUs);
        $this->vars = Arr::add($this->vars, 'theBenefitsOfEarlySwimming', $this->theBenefitsOfEarlySwimming);
        $this->vars = Arr::add($this->vars, 'whoSwimsWithUs', $this->whoSwimsWithUs);
        $this->vars = Arr::add($this->vars, 'trainers', $this->trainersView);
        $this->vars = Arr::add($this->vars, 'prices', $this->pricesView);
        $this->vars = Arr::add($this->vars, 'promotions', $this->promotionsView);
        $this->vars = Arr::add($this->vars, 'swimNeverNotEarly', $this->swimNeverNotEarly);
        $this->vars = Arr::add($this->vars, 'howWeSwim', $howWeSwim);
        $this->vars = Arr::add($this->vars, 'security', $this->security);
        $this->vars = Arr::add($this->vars, 'reviews', $this->reviews);
        $this->vars = Arr::add($this->vars, 'swimmingPool', $this->swimmingPool);
        $this->vars = Arr::add($this->vars, 'footer', $this->footer);
        $this->vars = Arr::add($this->vars, 'trialLesson', $this->trialLesson);
        $this->vars = Arr::add($this->vars, 'rules', $this->rules);
        $this->vars = Arr::add($this->vars, 'medicalCertificates', $this->medicalCertificatesView);
        $this->vars = Arr::add($this->vars, 'contactUs', $this->contactUs);
        $this->vars = Arr::add($this->vars, 'vacancies', $this->vacanciesView);

        return view($this->template . '.index')->with($this->vars);
    }

    private function renderHeader() {
        $texts = $this->getFromCollection($this->texts, [1 => 7]);
        $images = $this->getFromCollection($this->images, [1 => 1]);
        $this->headerView = view( $this->template . '.header')->with(['texts' => $texts, 'images' => $images, 'filialBranches' => $this->filialBranches])->render();
    }

    private function renderAboutUs() {
        $texts = $this->getFromCollection($this->texts, [8 => 9]);
        $video = $this->getFromCollection($this->videos, [1 => 1])->first();
        $this->aboutUs = view( $this->template . '.about_us')->with(['texts' => $texts, 'video' => $video])->render();
    }

    private function renderTheBenefitsOfEarlySwimming() {
        $texts = $this->getFromCollection($this->texts, [10 => 22]);
        $images = $this->getFromCollection($this->images, [2 => 2]);
        $this->theBenefitsOfEarlySwimming = view($this->template . '.the_benefits_of_early_swimming')->with(['texts' => $texts, 'images' => $images])->render();
    }

    private function renderWhoSwimsWithUs() {
        $texts = $this->getFromCollection($this->texts, [23 => 32]);
        $images = $this->getFromCollection($this->images, [3 => 5]);
        $this->whoSwimsWithUs = view($this->template . '.who_swims_with_us')->with(['texts' => $texts, 'images' => $images])->render();
    }

    private function renderTrainers() {
        $texts = $this->getFromCollection($this->texts, [33 => 34]);
        $this->trainersView = view($this->template . '.trainers')->with(['trainers' => $this->trainers, 'texts' => $texts])->render();
    }

    private function renderPrices() {
        $texts = $this->getFromCollection($this->texts, [35 => 35]);
        //dd($this->calculatorDescriptions);
        $this->pricesView = view($this->template . '.prices')->with(['texts' => $texts, 'filialBranches' => $this->filialBranches, 'calculatorDescriptions' => $this->calculatorDescriptions])->render();
    }

    private function renderPromotions() {
        $texts = $this->getFromCollection($this->texts, [67 => 67]);
        $this->promotionsView = view($this->template . '.promotions')->with(['texts' => $texts, 'promotions' => $this->promotions])->render();
    }

    private function renderSwimNeverNotEarly() {
        $texts = $this->getFromCollection($this->texts, [36 => 37]);
        $images = $this->getFromCollection($this->images, [6 => 6]);
        $this->swimNeverNotEarly = view($this->template . '.swim_never_not_early')->with(['texts' => $texts, 'images' => $images])->render();
    }

    private function renderSecurity() {
        $texts = $this->getFromCollection($this->texts, [38 => 39]);
        $images = $this->getFromCollection($this->images, [7 => 9]);
        $this->security = view($this->template . '.security')->with(['texts' => $texts, 'securityCategories' => $this->securityCategories, 'images' => $images])->render();
    }

    private function renderReviews() {
        $texts = $this->getFromCollection($this->texts, [40 => 40]);
        $videos = $this->getFromCollection($this->videos, [2 => count($this->videos)-1]);
        $this->reviews = view($this->template . '.reviews')->with(['texts' => $texts, 'videos' => $videos])->render();
    }

    private function renderSwimmingPool() {
        $texts = $this->getFromCollection($this->texts, [41 => 46]);
        $this->swimmingPool = view($this->template . '.swimming_pool')->with('texts', $texts)->render();
    }

    private function renderFooter() {
        $texts = $this->getFromCollection($this->texts, [47 => 55]);
        $this->footer = view($this->template . '.footer')->with(['texts' => $texts, 'filialBranches' => $this->filialBranches])->render();
    }

    private function renderTrialLesson() {
        $texts = $this->getFromCollection($this->texts, [56 => 56]);
        $this->trialLesson = view($this->template . '.trial_lesson')->with('texts' , $texts)->render();
    }

    private function renderRules() {
        $texts = $this->getFromCollection($this->texts, [57 => 59]);
        $this->rules = view($this->template . '.rules')->with(['texts' => $texts, 'ruleCategories' => $this->ruleCategories])->render();
    }

    private function renderMedicalCertificates() {
        $texts = $this->getFromCollection($this->texts, [60 => 61]);
        $this->medicalCertificatesView = view($this->template . '.medical_certificates')->with(['texts' => $texts, 'medicalCertificates' => $this->medicalCertificates])->render();
    }

    private function renderContactUs() {
        $texts = $this->getFromCollection($this->texts, [66 => 66]);
        $this->contactUs = view($this->template . '.contact_us')->with(['texts' => $texts, 'filialBranches' => $this->filialBranches])->render();
    }

    private function renderVacancies() {
        $texts = $this->getFromCollection($this->texts, [62 => 65]);
        $this->vacanciesView = view($this->template . '.vacancies')->with(['texts' => $texts, 'vacancies' => $this->vacancies])->render();
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
