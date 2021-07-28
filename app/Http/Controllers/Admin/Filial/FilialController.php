<?php

namespace App\Http\Controllers\Admin\Filial;

use App\Http\Controllers\Admin\IndexController;
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
use Illuminate\Support\Arr;

class FilialController extends IndexController
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
        $this->template = 'admin.main';
    }

    public function index(Request $request, $alias) {

        $this->getTextsData();
        $this->getFilialsData();
        $this->getCalculatorDescriptionsData();
        $this->getFilialBranchData($alias);
        $this->getImagesData();

        $this->renderAdminNav();

        $this->template = 'admin.filial';
        $this->renderHeader();
        $this->renderPrices();
        $this->renderSwimNeverNotEarly();
        $this->vars = Arr::add($this->vars, 'header', $this->headerView);
        $this->vars = Arr::add($this->vars, 'prices', $this->pricesView);
        $this->vars = Arr::add($this->vars, 'adminNav', $this->adminNavView);
        $this->vars = Arr::add($this->vars, 'swimNeverNotEarly', $this->swimNeverNotEarlyView);


        return view($this->template . '.index')->with($this->vars);
    }

    protected function getFilialBranchData($alias)
    {
        $this->filialBranch = $this->filialsRepository->getFilialByAlias($alias);
    }

    protected function renderPrices()
    {
        $texts = $this->getFromCollection($this->texts, [35 => 35, 68 => 68]);
        $this->pricesView = view($this->template . '.prices')->with(['texts' => $texts, 'filialBranch' => $this->filialBranch, 'calculatorDescriptions' => $this->calculatorDescriptions])->render();
    }

    protected function renderHeader() {
        $texts = $this->getFromCollection($this->texts, [68 => 68]);
        $images = $this->getFromCollection($this->images, [1 => 1]);
        $this->headerView = view( $this->template . '.header')->with(['texts' => $texts, 'images' => $images, 'filialBranch' => $this->filialBranch])->render();
    }

    protected function renderSwimNeverNotEarly()
    {
        $texts = $this->getFromCollection($this->texts, [36 => 36]);
        $images = $this->getFromCollection($this->images, [6 => 6]);
        $this->swimNeverNotEarlyView = view($this->template . '.swim_never_not_early')->with(['texts' => $texts, 'images' => $images, 'filialBranch' => $this->filialBranch])->render();
    }
}
