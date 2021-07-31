<?php

namespace App\Http\Controllers;

use App\Repositories\CalculatorDescriptionsRepository;
use App\Repositories\FilialsRepository;
use App\Repositories\ImagesRepository;
use App\Repositories\MedicalCertificatesRepository;
use App\Repositories\NumberOfLessonsRepository;
use App\Repositories\PoolsRepository;
use App\Repositories\PromotionsRepository;
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
    protected PoolsRepository $poolsRepository;
    protected SubscriptionsRepository $subscriptionsRepository;
    protected NumberOfLessonsRepository $numberOfLessonsRepository;

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
    private Collection $pools;
    private Collection $subscriptions;
    private Collection $numbersOfLessons;

    public function __construct(TextsRepository $textsRepository, TrainersRepository $trainersRepository, SecurityCategoriesRepository $securityCategoriesRepository,
                                SecurityItemsRepository $securityItemsRepository, VideosRepository $videosRepository, RuleCategoriesRepository $ruleCategoriesRepository,
                                RuleItemsRepository $ruleItemsRepository, MedicalCertificatesRepository $medicalCertificatesRepository, VacanciesRepository $vacanciesRepository,
                                ImagesRepository $imagesRepository, FilialsRepository $filialBranchesRepository, PromotionsRepository $promotionsRepository, CalculatorDescriptionsRepository $calculatorDescriptionsRepository,
                                PoolsRepository $poolsRepository, SubscriptionsRepository $subscriptionsRepository, NumberOfLessonsRepository $numberOfLessonsRepository) {
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
        $this->poolsRepository = $poolsRepository;
        $this->subscriptionsRepository = $subscriptionsRepository;
        $this->numberOfLessonsRepository = $numberOfLessonsRepository;
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
        $this->filials = $this->filialsRepository->getAll();
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

    protected function getPoolsData() {
        $this->pools = $this->poolsRepository->getAll();
    }

    protected function getSubscriptionsData() {
        $this->subscriptions = $this->subscriptionsRepository->getAll();
    }

    protected function getNumberOfLessonsData() {
        $this->numbersOfLessons = $this->numberOfLessonsRepository->getAll();
    }

    protected function renderHeader(): string {
        $texts = $this->getFromCollection($this->texts, [1 => 2]);
        return view( $this->template . '.header')->with(['texts' => $texts, 'filials' => $this->filials])->render();
    }

    protected function renderOffer(): string {
        $texts = $this->getFromCollection($this->texts, [3 => 4]);
        return view($this->template . '.offer')->with('texts', $texts)->render();
    }

    protected function renderAbout(): string {
        $texts = $this->getFromCollection($this->texts, [5 => 6]);
        $video = $this->getFromCollection($this->videos, [1 => 1])->first();
        return view( $this->template . '.about')->with(['texts' => $texts, 'video' => $video])->render();
    }

    protected function renderGallery(): string {
        $texts = $this->getFromCollection($this->texts, [7 => 7]);
        return view($this->template . '.gallery')->with('texts', $texts)->render();
    }

    protected function renderCoaches(): string {
        $texts = $this->getFromCollection($this->texts, [8 => 9]);
        return view($this->template . '.coaches')->with(['texts' => $texts, 'filials' => $this->filials, 'trainers' => $this->trainers])->render();
    }

    protected function renderPayment(): string {
        $texts = $this->getFromCollection($this->texts, [10 => 10]);

        $currentFilial = $this->filials[0];

        $hasOnceNumbersOfLessons = false;
        $hasManyNumbersOfLessons = false;
        foreach ($this->numbersOfLessons as $item) {
            if ($item->is_once) {
                $hasOnceNumbersOfLessons = true;
                if ($hasManyNumbersOfLessons)
                    break;
            } else {
                $hasManyNumbersOfLessons = true;
                if ($hasOnceNumbersOfLessons)
                    break;
            }
        }

        return view($this->template . '.payment')->with([  'texts' => $texts,
                                                                'filials' => $this->filials,
                                                                'pools' => $this->pools,
                                                                'subscriptions' => $this->subscriptions,
                                                                'numbersOfLessons' => $this->numbersOfLessons,
                                                                'hasOnceNumbersOfLessons' => $hasOnceNumbersOfLessons,
                                                                'hasManyNumbersOfLessons' => $hasManyNumbersOfLessons])->render();
    }

    protected function renderSale(): string {
        $texts = $this->getFromCollection($this->texts, [11 => 11]);
        return view($this->template . '.sale')->with(['texts' => $texts, 'promotions' => $this->promotions])->render();
    }

    protected function renderWhat(): string {
        return view($this->template . '.what')->render();
    }

    protected function renderWaterTreatment(): string {
        return view($this->template . '.water_treatment')->render();
    }

    protected function renderReviews(): string {
        return view($this->template . '.reviews')->render();
    }

    protected function renderQuestions(): string {
        return view($this->template . '.questions')->render();
    }

    protected function renderAddresses(): string {
        return view($this->template . '.addresses')->with('filials', $this->filials)->render();
    }

    protected function renderFooter(): string {
        return view($this->template . '.footer')->render();
    }

    protected function renderSignUpModal(): string {
        return view($this->template . '.modal_sign_up')->with('filials', $this->filials)->render();
    }

    protected function renderPaymentRulesModal(): string {
        return view($this->template . '.modal_payment_rules')->render();
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

    protected function getOneFromCollectionByField(Collection $collection, $field, $value) {
       return $collection->filter(function ($item) use ($field, $value) {
            return $item->$field = $value;
        })->first();
    }
}
