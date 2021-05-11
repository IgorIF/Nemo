<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\BaseController;
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

class FilialController extends BaseController
{

    private const TEMPLATE = 'filial';
    private ?FilialBranch $filialBranch;

    public function __construct(TextsRepository $textsRepository, TrainersRepository $trainersRepository, SecurityCategoriesRepository $securityCategoriesRepository,
                                SecurityItemsRepository $securityItemsRepository, VideosRepository $videosRepository, RuleCategoriesRepository $ruleCategoriesRepository,
                                RuleItemsRepository $ruleItemsRepository, MedicalCertificatesRepository $medicalCertificatesRepository, VacanciesRepository $vacanciesRepository,
                                ImagesRepository $imagesRepository, FilialBranchesRepository $filialBranchesRepository, PromotionsRepository $promotionsRepository, CalculatorDescriptionsRepository $calculatorDescriptionsRepository)
    {
        parent::__construct($textsRepository, $trainersRepository, $securityCategoriesRepository, $securityItemsRepository,  $videosRepository,
            $ruleCategoriesRepository, $ruleItemsRepository, $medicalCertificatesRepository, $vacanciesRepository, $imagesRepository,
            $filialBranchesRepository, $promotionsRepository, $calculatorDescriptionsRepository);
        $this->template = 'site';
    }

    public function index(Request $request, $alias) {
        $this->filialBranch = $this->filialBranchesRepository->getFilialByAlias($alias);

        if ($this->filialBranch == null)
            abort(404);

        //dd($this->filialBranch);

        parent::__invoke($request);
        return $this->renderOutput();
    }

    protected function renderHeader()
    {
        $texts = $this->getFromCollection($this->texts, [5 => 7]);
        $images = $this->getFromCollection($this->images, [1 => 1]);
        $this->headerView = view( self::TEMPLATE . '.header')->with(['texts' => $texts, 'images' => $images, 'filialBranch' => $this->filialBranch])->render();
    }

    protected function renderPrices()
    {
        $texts = $this->getFromCollection($this->texts, [35 => 35]);
        $this->pricesView = view(self::TEMPLATE . '.prices')->with(['texts' => $texts, 'filialBranch' => $this->filialBranch, 'calculatorDescriptions' => $this->calculatorDescriptions])->render();
    }

    protected function renderFooter()
    {
        $texts = $this->getFromCollection($this->texts, [47 => 55]);
        $this->footer = view(self::TEMPLATE . '.footer')->with(['texts' => $texts, 'filialBranch' => $this->filialBranch])->render();
    }

    protected function renderContactUs()
    {
        $texts = $this->getFromCollection($this->texts, [66 => 66]);
        $this->contactUs = view(self::TEMPLATE . '.contact_us')->with(['texts' => $texts, 'filialBranch' => $this->filialBranch])->render();
    }

}
