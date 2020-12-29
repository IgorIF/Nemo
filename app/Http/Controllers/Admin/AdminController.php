<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Repositories\TextsRepository;
use App\Repositories\TrainersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AdminController extends Controller
{
    protected $textsRepository;
    protected $trainersRepository;

    private $header;
    private $aboutUs;
    private $theBenefitsOfEarlySwimming;
    private $whoSwimsWithUs;
    private $trainers;
    private $swimNeverNotEarly;
    private $security;

    protected $template;        //шаблон
    protected $vars = [];       //массив с данными которые передаюся в шаблон

    /**
     * EditSite constructor.
     * @param TextsRepository $textsRepository
     * @param TrainersRepository $trainersRepository
     */
    public function __construct(TextsRepository $textsRepository, TrainersRepository $trainersRepository)
    {
        $this->textsRepository = $textsRepository;
        $this->trainersRepository = $trainersRepository;
        $this->template = 'admin.index';
    }


    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $this->renderHeader();
        $this->renderAboutUs();
        $this->renderTheBenefitsOfEarlySwimming();
        $this->renderWhoSwimsWithUs();
        $this->renderTrainers();
        $this->renderSwimNeverNotEarly();
        $this->renderSecurity();

        return $this->renderOutput();
    }

    private function renderOutput() {
        $prices = view('admin.prices')->render();
        $howWeSwim = view('admin.how_we_swim')->render();
        $reviews = view('admin.reviews')->render();
        $swimmingPool = view('admin.swimming_pool')->render();
        $footer = view('admin.footer')->render();

        $this->vars = Arr::add($this->vars, 'header', $this->header);
        $this->vars = Arr::add($this->vars, 'aboutUs', $this->aboutUs);
        $this->vars = Arr::add($this->vars, 'theBenefitsOfEarlySwimming', $this->theBenefitsOfEarlySwimming);
        $this->vars = Arr::add($this->vars, 'whoSwimsWithUs', $this->whoSwimsWithUs);
        $this->vars = Arr::add($this->vars, 'trainers', $this->trainers);
        $this->vars = Arr::add($this->vars, 'prices', $prices);
        $this->vars = Arr::add($this->vars, 'swimNeverNotEarly', $this->swimNeverNotEarly);
        $this->vars = Arr::add($this->vars, 'howWeSwim', $howWeSwim);
        $this->vars = Arr::add($this->vars, 'security', $this->security);
        $this->vars = Arr::add($this->vars, 'reviews', $reviews);
        $this->vars = Arr::add($this->vars, 'swimmingPool', $swimmingPool);
        $this->vars = Arr::add($this->vars, 'footer', $footer);

        return view($this->template)->with($this->vars);
    }

    private function renderHeader() {
        $texts = $this->textsRepository->getInRangeById(1, 15);
        $this->header = view( 'admin.header')->with('texts', $texts)->render();
    }

    private function renderAboutUs() {
        $texts = $this->textsRepository->getInRangeById(16, 17);
        $this->aboutUs = view( 'admin.about_us')->with('texts', $texts)->render();
    }

    private function renderTheBenefitsOfEarlySwimming() {
        $texts = $this->textsRepository->getInRangeById(18, 30);
        $this->theBenefitsOfEarlySwimming = view('admin.the_benefits_of_early_swimming')->with('texts', $texts)->render();
    }

    private function renderWhoSwimsWithUs() {
        $texts = $this->textsRepository->getInRangeById(31, 40);
        $this->whoSwimsWithUs = view('admin.who_swims_with_us')->with('texts', $texts)->render();
    }

    private function renderTrainers() {
        $texts = $this->textsRepository->getInRangeById(33, 34);
        $trainers = $this->trainersRepository->getTrainers();
        $this->trainers = view('admin.trainers')->with(['trainers' => $trainers, 'texts' => $texts ])->render();
    }

    private function renderSwimNeverNotEarly() {
        $texts = $this->textsRepository->getInRangeById(35, 36);
        $this->swimNeverNotEarly = view('admin.swim_never_not_early')->with('texts', $texts)->render();
    }

    private function renderSecurity() {
        $texts = $this->textsRepository->getInRangeById(37, 39);
        $this->security = view('admin.security')->with('texts', $texts)->render();
    }

    protected function editText(Request $request) {
        return $this->textsRepository->updateText($request);
    }
}
