<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\BaseController;
use App\Models\Filial;
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

class FilialController extends BaseController
{
    private ?Filial $filialBranch;

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

    public function index(Request $request, $alias) {

        $this->getTextsData();
        $this->getImagesData();
        $this->getFilialBranchData($alias);
        $this->getVideosData();
        $this->getTrainersData();
        $this->getCalculatorDescriptionsData();
        $this->getPromotionsData();
        $this->getSecurityCategoriesData();
        $this->getRuleCategoriesData();
        $this->getMedicalCertificatesData();
        $this->getVacanciesData();

        $this->renderAboutUs();
        $this->renderTheBenefitsOfEarlySwimming();
        $this->renderWhoSwimsWithUs();
        $this->renderTrainers();
        $this->renderPromotions();
        $this->renderHowWeSwim();
        $this->renderSecurity();
        $this->renderReviews();
        $this->renderSwimmingPool();
        $this->renderRules();
        $this->renderMedicalCertificates();
        $this->renderVacancies();
        $this->renderCardPaymentProcess();

        $this->template = "site.filial";
        $this->renderHeader();
        $this->renderPrices();
        $this->renderFooter();
        $this->renderContactUs();
        $this->renderTrialLesson();
        $this->renderSwimNeverNotEarly();

        if ($this->filialBranch == null)
            abort(404);

        if ($this->filialBranch->alias != "nekrasovka" && $this->filialBranch->alias != "rechnoy_vokzal")
            abort(404);

        return $this->renderOutput();
    }

    protected function getFilialBranchData($alias)
    {
        $this->filialBranch = $this->filialsRepository->getFilialByAlias($alias);
    }

    protected function renderHeader()
    {
        $texts = $this->getFromCollection($this->texts, [5 => 5, 68 => 68]);
        $images = $this->getFromCollection($this->images, [1 => 1]);
        $this->headerView = view( $this->template . '.header')->with(['texts' => $texts, 'images' => $images, 'filialBranch' => $this->filialBranch])->render();
    }

    protected function renderPrices()
    {
        $texts = $this->getFromCollection($this->texts, [35 => 35, 68 => 68]);
        $this->pricesView = view($this->template . '.prices')->with(['texts' => $texts, 'filialBranch' => $this->filialBranch, 'calculatorDescriptions' => $this->calculatorDescriptions])->render();
    }

    protected function renderFooter()
    {
        $texts = $this->getFromCollection($this->texts, [47 => 55]);
        $this->footerView = view($this->template . '.footer')->with(['texts' => $texts, 'filialBranch' => $this->filialBranch])->render();
    }

    protected function renderContactUs()
    {
        $texts = $this->getFromCollection($this->texts, [66 => 66]);
        $this->contactUsView = view($this->template . '.contact_us')->with(['texts' => $texts, 'filialBranch' => $this->filialBranch])->render();
    }

    protected function renderSwimNeverNotEarly()
    {
        $texts = $this->getFromCollection($this->texts, [36 => 36]);
        $images = $this->getFromCollection($this->images, [6 => 6]);
        $this->swimNeverNotEarlyView = view($this->template . '.swim_never_not_early')->with(['texts' => $texts, 'images' => $images, 'filialBranch' => $this->filialBranch])->render();
    }

}
