<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
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

class IndexController extends BaseController
{
    private $modalAboutUsEditVideo;

    public function __construct(TextsRepository $textsRepository, TrainersRepository $trainersRepository, SecurityCategoriesRepository $securityCategoriesRepository,
                                SecurityItemsRepository $securityItemsRepository, VideosRepository $videosRepository, RuleCategoriesRepository $ruleCategoriesRepository,
                                RuleItemsRepository $ruleItemsRepository, MedicalCertificatesRepository $medicalCertificatesRepository, VacanciesRepository $vacanciesRepository)
    {
        $this->initRepositories($textsRepository, $trainersRepository, $securityCategoriesRepository, $securityItemsRepository,  $videosRepository, $ruleCategoriesRepository, $ruleItemsRepository, $medicalCertificatesRepository, $vacanciesRepository);
        $this->template = 'admin';
    }

    public function __invoke(Request $request)
    {
        parent::__invoke($request);
        $this->renderModalAboutUsEditVideo();
        return $this->renderOutput();
    }

    protected function renderOutput() {

        $modalAddTrainer = view('admin.modals.modal_add_trainer')->render();
        $modalAddSecurityItem = view('admin.modals.modal_add_item')->render();
        $modalAddVideo = view('admin.modals.modal_add_video')->render();
        $modalCropper = view('admin.modals.modal_cropper')->render();
        $adminNav = view('admin.admin_nav')->render();

        $this->vars = Arr::add($this->vars, 'modalAboutUsEditVideo', $this->modalAboutUsEditVideo);
        $this->vars = Arr::add($this->vars, 'modalAddTrainer', $modalAddTrainer);
        $this->vars = Arr::add($this->vars, 'modalAddSecurityItem', $modalAddSecurityItem);
        $this->vars = Arr::add($this->vars, 'modalAddVideo', $modalAddVideo);
        $this->vars = Arr::add($this->vars, 'modalCropper', $modalCropper);
        $this->vars = Arr::add($this->vars, 'adminNav', $adminNav);

        return parent::renderOutput();
    }

    private function renderModalAboutUsEditVideo() {
        $video = $this->videosRepository->getAboutUsVideo();
        $this->modalAboutUsEditVideo = view('admin.modals.modal_about_us_edit_video')->with('video', $video)->render();
    }

    protected function editText(Request $request) {
        return $this->textsRepository->updateText($request);
    }
}
