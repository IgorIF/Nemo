<?php

namespace App\Http\Controllers;

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
use Illuminate\Support\Collection;


abstract class BaseController extends Controller
{
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
    protected ReviewsRepository $reviewsRepository;

    protected Collection $texts;
    protected Collection $images;
    protected Collection $videos;
    protected Collection $filials;
    protected Collection $trainers;
    private Collection $securityCategories;
    private Collection $ruleCategories;
    private Collection $medicalCertificates;
    private Collection $vacancies;
    protected Collection $promotions;
    protected string $calculatorDescriptions;
    protected Collection $pools;
    protected Collection $subscriptions;
    protected Collection $numbersOfLessons;
    protected Collection $reviews;

    public function __construct(TextsRepository $textsRepository, TrainersRepository $trainersRepository, SecurityCategoriesRepository $securityCategoriesRepository,
                                SecurityItemsRepository $securityItemsRepository, VideosRepository $videosRepository, RuleCategoriesRepository $ruleCategoriesRepository,
                                RuleItemsRepository $ruleItemsRepository, MedicalCertificatesRepository $medicalCertificatesRepository, VacanciesRepository $vacanciesRepository,
                                ImagesRepository $imagesRepository, FilialsRepository $filialBranchesRepository, PromotionsRepository $promotionsRepository, CalculatorDescriptionsRepository $calculatorDescriptionsRepository,
                                PoolsRepository $poolsRepository, SubscriptionsRepository $subscriptionsRepository, NumberOfLessonsRepository $numberOfLessonsRepository, ReviewsRepository $reviewsRepository) {
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
        $this->reviewsRepository = $reviewsRepository;
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

    protected function getReviewsData() {
        $this->reviews = $this->reviewsRepository->getAll();
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

    protected abstract function renderOutput(): string;
}
