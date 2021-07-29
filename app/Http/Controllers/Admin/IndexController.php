<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
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

class IndexController extends BaseController
{
    private string $modalAboutUsEditVideoView;
    protected string $adminNavView;

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

    public function __invoke(Request $request)
    {
        $this->getTextsData();
        $this->getImagesData();
        $this->getFilialsData();
        $this->getVideosData();
        $this->getTrainersData();
        $this->getCalculatorDescriptionsData();
        $this->getPromotionsData();
        $this->getSecurityCategoriesData();
        $this->getRuleCategoriesData();
        $this->getMedicalCertificatesData();
        $this->getVacanciesData();

        $this->headerView = $this->renderHeader();
        $this->swimBeforeWalkingView = $this->renderOffer();


        return $this->renderOutput();
    }

    protected function renderOutput(): string {

        $this->vars = Arr::add($this->vars, 'header', $this->headerView);
        $this->vars = Arr::add($this->vars, 'swimBeforeWalking', $this->swimBeforeWalkingView);

        /*$modalAddTrainer = view($this->template . '.modals.modal_add_trainer')->render();
        $modalAddPromotion = view($this->template . '.modals.modal_add_promotion')->render();
        $modalTrainerVideo = view($this->template . '.modals.modal_trainer_video')->render();
        $modalAddSecurityItem = view($this->template . '.modals.modal_add_item')->render();
        $modalAddVideo = view($this->template . '.modals.modal_add_video')->render();
        $modalCropper = view($this->template . '.modals.modal_cropper')->render();

        $this->vars = Arr::add($this->vars, 'modalAboutUsEditVideo', $this->modalAboutUsEditVideoView);
        $this->vars = Arr::add($this->vars, 'modalAddTrainer', $modalAddTrainer);
        $this->vars = Arr::add($this->vars, 'modalAddPromotion', $modalAddPromotion);
        $this->vars = Arr::add($this->vars, 'modalTrainerVideo', $modalTrainerVideo);
        $this->vars = Arr::add($this->vars, 'modalAddSecurityItem', $modalAddSecurityItem);
        $this->vars = Arr::add($this->vars, 'modalAddVideo', $modalAddVideo);
        $this->vars = Arr::add($this->vars, 'modalCropper', $modalCropper);
        $this->vars = Arr::add($this->vars, 'adminNav', $this->adminNavView);*/

        return view($this->template . '.index')->with($this->vars);
    }



    private function renderModalAboutUsEditVideo() {
        $video = $this->getFromCollection($this->videos, [1 => 1])->first();
        $this->modalAboutUsEditVideoView = view($this->template . '.modals.modal_about_us_edit_video')->with('video', $video)->render();
    }

    protected function renderAdminNav() {
        $this->adminNavView = view($this->template . '.admin_nav')->with('filialBranches', $this->filialBranches)->render();
    }

    /**
     * @param Request $request
     * @return int
     */
    protected function editText(Request $request): int
    {
        return $this->textsRepository->update($request);
    }
}
