<?php

namespace App\Http\Controllers;

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
use Illuminate\Support\Arr;


class BaseController extends Controller
{
    protected $template;        //шаблон
    protected $vars = [];       //массив с данными которые передаюся в шаблон

    protected $textsRepository;
    protected $trainersRepository;
    protected $securityCategoriesRepository;
    protected $securityItemsRepository;
    protected $videosRepository;
    protected $ruleCategoriesRepository;
    protected $ruleItemsRepository;
    protected $medicalCertificatesRepository;
    protected $vacanciesRepository;
    protected $imagesRepository;

    protected $header;
    protected $aboutUs;
    protected $theBenefitsOfEarlySwimming;
    protected $whoSwimsWithUs;
    protected $trainers;
    protected $prices;
    protected $swimNeverNotEarly;
    protected $security;
    protected $reviews;
    protected $swimmingPool;
    protected $footer;
    protected $trialLesson;
    protected $rules;
    protected $medicalCertificates;
    protected $vacancies;

    public function __construct(TextsRepository $textsRepository, TrainersRepository $trainersRepository, SecurityCategoriesRepository $securityCategoriesRepository,
                                SecurityItemsRepository $securityItemsRepository, VideosRepository $videosRepository, RuleCategoriesRepository $ruleCategoriesRepository,
                                RuleItemsRepository $ruleItemsRepository, MedicalCertificatesRepository $medicalCertificatesRepository, VacanciesRepository $vacanciesRepository, ImagesRepository $imagesRepository) {
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
    }

    public function __invoke(Request $request) {
        $this->renderHeader();
        $this->renderAboutUs();
        $this->renderTheBenefitsOfEarlySwimming();
        $this->renderWhoSwimsWithUs();
        $this->renderTrainers();
        $this->renderPrices();
        $this->renderSwimNeverNotEarly();
        $this->renderSecurity();
        $this->renderReviews();
        $this->renderSwimmingPool();
        $this->renderFooter();
        $this->renderTrialLesson();
        $this->renderRules();
        $this->renderMedicalCertificates();
        $this->renderVacancies();
    }

    protected function renderOutput() {

        $howWeSwim = view($this->template . '.how_we_swim')->render();

        $this->vars = Arr::add($this->vars, 'header', $this->header);
        $this->vars = Arr::add($this->vars, 'aboutUs', $this->aboutUs);
        $this->vars = Arr::add($this->vars, 'theBenefitsOfEarlySwimming', $this->theBenefitsOfEarlySwimming);
        $this->vars = Arr::add($this->vars, 'whoSwimsWithUs', $this->whoSwimsWithUs);
        $this->vars = Arr::add($this->vars, 'trainers', $this->trainers);
        $this->vars = Arr::add($this->vars, 'prices', $this->prices);
        $this->vars = Arr::add($this->vars, 'swimNeverNotEarly', $this->swimNeverNotEarly);
        $this->vars = Arr::add($this->vars, 'howWeSwim', $howWeSwim);
        $this->vars = Arr::add($this->vars, 'security', $this->security);
        $this->vars = Arr::add($this->vars, 'reviews', $this->reviews);
        $this->vars = Arr::add($this->vars, 'swimmingPool', $this->swimmingPool);
        $this->vars = Arr::add($this->vars, 'footer', $this->footer);
        $this->vars = Arr::add($this->vars, 'trialLesson', $this->trialLesson);
        $this->vars = Arr::add($this->vars, 'rules', $this->rules);
        $this->vars = Arr::add($this->vars, 'medicalCertificates', $this->medicalCertificates);
        $this->vars = Arr::add($this->vars, 'vacancies', $this->vacancies);

        return view($this->template . '.index')->with($this->vars);
    }

    private function renderHeader() {
        $texts = $this->textsRepository->getInRangeById([1 => 15]);
        $images = $this->imagesRepository->getInRangeById([1 => 1]);
        $this->header = view( $this->template . '.header')->with(['texts' => $texts, 'images' => $images])->render();
    }

    private function renderAboutUs() {
        $texts = $this->textsRepository->getInRangeById([16 => 17]);
        $video = $this->videosRepository->getAboutUsVideo();
        $this->aboutUs = view( $this->template . '.about_us')->with(['texts' => $texts, 'video' => $video])->render();
    }

    private function renderTheBenefitsOfEarlySwimming() {
        $texts = $this->textsRepository->getInRangeById([18 => 30]);
        $images = $this->imagesRepository->getInRangeById([2 => 2]);
        $this->theBenefitsOfEarlySwimming = view($this->template . '.the_benefits_of_early_swimming')->with(['texts' => $texts, 'images' => $images])->render();
    }

    private function renderWhoSwimsWithUs() {
        $texts = $this->textsRepository->getInRangeById([31 => 40]);
        $images = $this->imagesRepository->getInRangeById([3 => 5]);
        $this->whoSwimsWithUs = view($this->template . '.who_swims_with_us')->with(['texts' => $texts, 'images' => $images])->render();
    }

    private function renderTrainers() {
        $texts = $this->textsRepository->getInRangeById([41 => 42]);
        $trainers = $this->trainersRepository->getAll();
        $this->trainers = view($this->template . '.trainers')->with(['trainers' => $trainers, 'texts' => $texts ])->render();
    }

    private function renderPrices() {
        $texts = $this->textsRepository->getInRangeById([43 => 43]);
        $this->prices = view($this->template . '.prices')->with('texts', $texts)->render();
    }

    private function renderSwimNeverNotEarly() {
        $texts = $this->textsRepository->getInRangeById([44 => 45]);
        $images = $this->imagesRepository->getInRangeById([6 => 6]);
        $this->swimNeverNotEarly = view($this->template . '.swim_never_not_early')->with(['texts' => $texts, 'images' => $images])->render();
    }

    private function renderSecurity() {
        $texts = $this->textsRepository->getInRangeById([46 => 47]);
        $securityCategories = $this->securityCategoriesRepository->getAll();
        $images = $this->imagesRepository->getInRangeById([7 => 9]);
        $this->security = view($this->template . '.security')->with(['texts' => $texts, 'securityCategories' => $securityCategories, 'images' => $images])->render();
    }

    private function renderReviews() {
        $texts = $this->textsRepository->getInRangeById([48 => 48]);
        $videos = $this->videosRepository->getAllReviewsVideos();
        $this->reviews = view($this->template . '.reviews')->with(['texts' => $texts, 'videos' => $videos])->render();
    }

    private function renderSwimmingPool() {
        $texts = $this->textsRepository->getInRangeById([49 => 54]);
        $this->swimmingPool = view($this->template . '.swimming_pool')->with('texts', $texts)->render();
    }

    private function renderFooter() {
        $texts = $this->textsRepository->getInRangeById([55 => 62, 1 => 2, 4 => 5, 7 => 8, 10 => 11, 73 => 75]);
        $this->footer = view($this->template . '.footer')->with('texts', $texts)->render();
    }

    private function renderTrialLesson() {
        $texts = $this->textsRepository->getInRangeById([72 => 72]);
        $this->trialLesson = view($this->template . '.trial_lesson')->with('texts' , $texts)->render();
    }

    private function renderRules() {
        $texts = $this->textsRepository->getInRangeById([63 => 65]);
        $ruleCategories = $this->ruleCategoriesRepository->getAll();
        $this->rules = view($this->template . '.rules')->with(['texts' => $texts, 'ruleCategories' => $ruleCategories])->render();
    }

    private function renderMedicalCertificates() {
        $texts = $this->textsRepository->getInRangeById([66 => 67]);
        $medicalCertificates = $this->medicalCertificatesRepository->getAll();
        $this->medicalCertificates = view($this->template . '.medical_certificates')->with(['texts' => $texts, 'medicalCertificates' => $medicalCertificates])->render();
    }

    private function renderVacancies() {
        $texts = $this->textsRepository->getInRangeById([68 => 71]);
        $vacancies = $this->vacanciesRepository->getAll();
        $this->vacancies = view($this->template . '.vacancies')->with(['texts' => $texts, 'vacancies' => $vacancies])->render();
    }
}
