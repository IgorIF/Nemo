<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\ImagesRepository;
use App\Repositories\SecurityCategoriesRepository;
use App\Repositories\SecurityItemsRepository;
use App\Repositories\TextsRepository;
use App\Repositories\TrainersRepository;
use App\Repositories\VideosRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AdminController extends Controller
{
    protected $textsRepository;
    protected $trainersRepository;
    protected $securityCategoriesRepository;
    protected $securityItemsRepository;
    protected $videosRepository;
    protected $imagesRepository;

    private $modalAboutUsEditVideo;

    private $header;
    private $aboutUs;
    private $theBenefitsOfEarlySwimming;
    private $whoSwimsWithUs;
    private $trainers;
    private $prices;
    private $swimNeverNotEarly;
    private $security;
    private $reviews;
    private $swimmingPool;
    private $footer;

    private $rules;

    protected $template;        //шаблон
    protected $vars = [];       //массив с данными которые передаюся в шаблон

    /**
     * EditSite constructor.
     * @param TextsRepository $textsRepository
     * @param TrainersRepository $trainersRepository
     * @param SecurityCategoriesRepository $securityCategoriesRepository
     * @param SecurityItemsRepository $securityItemsRepository
     * @param VideosRepository $videosRepository
     */
    public function __construct(TextsRepository $textsRepository, TrainersRepository $trainersRepository, SecurityCategoriesRepository $securityCategoriesRepository,
                                SecurityItemsRepository $securityItemsRepository, VideosRepository $videosRepository)
    {
        $this->textsRepository = $textsRepository;
        $this->trainersRepository = $trainersRepository;
        $this->securityCategoriesRepository = $securityCategoriesRepository;
        $this->securityItemsRepository = $securityItemsRepository;
        $this->videosRepository = $videosRepository;
        $this->template = 'admin.index';
    }


    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $this->renderModalAboutUsEditVideo();

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

        $this->renderRules();

        return $this->renderOutput();
    }

    private function renderOutput() {


        $modalAddTrainer = view('admin.modals.modal_add_trainer')->render();
        $modalAddSecurityItem = view('admin.modals.modal_add_security_item')->render();
        $modalAddVideo = view('admin.modals.modal_add_video')->render();
        $modalCropper = view('admin.modals.modal_cropper')->render();

        $howWeSwim = view('admin.how_we_swim')->render();


        $this->vars = Arr::add($this->vars, 'header', $this->header);
        $this->vars = Arr::add($this->vars, 'modalAboutUsEditVideo', $this->modalAboutUsEditVideo);
        $this->vars = Arr::add($this->vars, 'modalAddTrainer', $modalAddTrainer);
        $this->vars = Arr::add($this->vars, 'modalAddSecurityItem', $modalAddSecurityItem);
        $this->vars = Arr::add($this->vars, 'modalAddVideo', $modalAddVideo);
        $this->vars = Arr::add($this->vars, 'modalCropper', $modalCropper);
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
        $this->vars = Arr::add($this->vars, 'rules', $this->rules);

        return view($this->template)->with($this->vars);
    }

    private function renderHeader() {
        $texts = $this->textsRepository->getInRangeById([1 => 15]);
        $this->header = view( 'admin.header')->with('texts', $texts)->render();
    }

    private function renderAboutUs() {
        $texts = $this->textsRepository->getInRangeById([16 => 17]);
        $video = $this->videosRepository->getAboutUsVideo();
        $this->aboutUs = view( 'admin.about_us')->with(['texts' => $texts, 'video' => $video])->render();
    }

    private function renderTheBenefitsOfEarlySwimming() {
        $texts = $this->textsRepository->getInRangeById([18 => 30]);
        $this->theBenefitsOfEarlySwimming = view('admin.the_benefits_of_early_swimming')->with('texts', $texts)->render();
    }

    private function renderWhoSwimsWithUs() {
        $texts = $this->textsRepository->getInRangeById([31 => 40]);
        $this->whoSwimsWithUs = view('admin.who_swims_with_us')->with('texts', $texts)->render();
    }

    private function renderTrainers() {
        $texts = $this->textsRepository->getInRangeById([41 => 42]);
        $trainers = $this->trainersRepository->getTrainers();
        $this->trainers = view('admin.trainers')->with(['trainers' => $trainers, 'texts' => $texts ])->render();
    }

    private function renderPrices() {
        $texts = $this->textsRepository->getInRangeById([43 => 43]);
        $this->prices = view('admin.prices')->with('texts', $texts)->render();
    }

    private function renderSwimNeverNotEarly() {
        $texts = $this->textsRepository->getInRangeById([44 => 45]);
        $this->swimNeverNotEarly = view('admin.swim_never_not_early')->with('texts', $texts)->render();
    }

    private function renderSecurity() {
        $texts = $this->textsRepository->getInRangeById([46 => 47]);
        $securityCategories = $this->securityCategoriesRepository->getAll();
        $this->security = view('admin.security')->with(['texts' => $texts, 'securityCategories' => $securityCategories])->render();
    }

    private function renderReviews() {
        $texts = $this->textsRepository->getInRangeById([48 => 48]);
        $videos = $this->videosRepository->getAllReviewsVideos();
        $this->reviews = view('admin.reviews')->with(['texts' => $texts, 'videos' => $videos])->render();
    }

    private function renderSwimmingPool() {
        $texts = $this->textsRepository->getInRangeById([49 => 54]);
        $this->swimmingPool = view('admin.swimming_pool')->with('texts', $texts)->render();
    }

    private function renderFooter() {
        $texts = $this->textsRepository->getInRangeById([55 => 62, 1 => 2, 4 => 5, 7 => 8, 10 => 11]);
        $this->footer = view('admin.footer')->with('texts', $texts)->render();
    }

    private function renderModalAboutUsEditVideo() {
        $video = $this->videosRepository->getAboutUsVideo();
        $this->modalAboutUsEditVideo = view('admin.modals.modal_about_us_edit_video')->with('video', $video)->render();
    }

    private function renderRules() {
        $this->rules = view('admin.rules')->render();
    }

    protected function editText(Request $request) {
        return $this->textsRepository->updateText($request);
    }
}
