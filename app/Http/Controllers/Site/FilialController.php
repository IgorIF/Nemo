<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\BaseController;
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

class FilialController extends BaseController
{
    public function __construct(TextsRepository $textsRepository, TrainersRepository $trainersRepository, SecurityCategoriesRepository $securityCategoriesRepository,
                                SecurityItemsRepository $securityItemsRepository, VideosRepository $videosRepository, RuleCategoriesRepository $ruleCategoriesRepository,
                                RuleItemsRepository $ruleItemsRepository, MedicalCertificatesRepository $medicalCertificatesRepository, VacanciesRepository $vacanciesRepository,
                                ImagesRepository $imagesRepository, FilialBranchesRepository $filialBranchesRepository, PromotionsRepository $promotionsRepository, CalculatorDescriptionsRepository $calculatorDescriptionsRepository)
    {
        parent::__construct($textsRepository, $trainersRepository, $securityCategoriesRepository, $securityItemsRepository,  $videosRepository,
            $ruleCategoriesRepository, $ruleItemsRepository, $medicalCertificatesRepository, $vacanciesRepository, $imagesRepository,
            $filialBranchesRepository, $promotionsRepository, $calculatorDescriptionsRepository);
        $this->template = 'filial';
    }

    public function __invoke($alias)
    {
        $filialBranch = $this->filialBranchesRepository->getFilialByAlias($alias);

        if ($filialBranch == null)
            abort(404);

        dd($filialBranch);

        //parent::__invoke($request);
        return $this->renderOutput();
    }

    protected function renderOutput() {
        return parent::renderOutput();
    }

}
