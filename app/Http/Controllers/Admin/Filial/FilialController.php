<?php

namespace App\Http\Controllers\Admin\Filial;

use App\Http\Controllers\Admin\IndexController;
use App\Models\FilialBranch;
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

class FilialController extends IndexController
{
    private ?FilialBranch $filialBranch;

    public function __construct(TextsRepository $textsRepository, TrainersRepository $trainersRepository, SecurityCategoriesRepository $securityCategoriesRepository,
                                SecurityItemsRepository $securityItemsRepository, VideosRepository $videosRepository, RuleCategoriesRepository $ruleCategoriesRepository,
                                RuleItemsRepository $ruleItemsRepository, MedicalCertificatesRepository $medicalCertificatesRepository, VacanciesRepository $vacanciesRepository,
                                ImagesRepository $imagesRepository, FilialBranchesRepository $filialBranchesRepository, PromotionsRepository $promotionsRepository, CalculatorDescriptionsRepository $calculatorDescriptionsRepository)
    {
        parent::__construct($textsRepository, $trainersRepository, $securityCategoriesRepository, $securityItemsRepository,  $videosRepository,
            $ruleCategoriesRepository, $ruleItemsRepository, $medicalCertificatesRepository, $vacanciesRepository, $imagesRepository,
            $filialBranchesRepository, $promotionsRepository, $calculatorDescriptionsRepository);
        $this->template = 'admin';
    }

    public function index(Request $request, $alias) {

        $this->getTextsData();
        $this->getFilialBranchesData();
        $this->getCalculatorDescriptionsData();
        $this->getFilialBranchData($alias);

        $this->renderAdminNav();

        $this->template = 'admin.filial';
        $this->renderPrices();
        $this->vars = Arr::add($this->vars, 'prices', $this->pricesView);
        $this->vars = Arr::add($this->vars, 'adminNav', $this->adminNavView);


        return view($this->template . '.index')->with($this->vars);
    }

    protected function getFilialBranchData($alias)
    {
        $this->filialBranch = $this->filialBranchesRepository->getFilialByAlias($alias);
    }

    protected function renderPrices()
    {
        $texts = $this->getFromCollection($this->texts, [35 => 35]);
        $this->pricesView = view($this->template . '.prices')->with(['texts' => $texts, 'filialBranch' => $this->filialBranch, 'calculatorDescriptions' => $this->calculatorDescriptions])->render();
    }
}
