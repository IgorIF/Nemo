<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Repositories\TextsRepository;
use App\Repositories\TrainersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class EditSite extends Controller
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
        $this->template = 'admin.editsite.index';
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
        $prices = view('admin.editsite.prices')->render();
        $howWeSwim = view('admin.editsite.how_we_swim')->render();
        $reviews = view('admin.editsite.reviews')->render();
        $swimmingPool = view('admin.editsite.swimming_pool')->render();
        $footer = view('admin.editsite.footer')->render();

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
        $text = [];

        $text[1] = $this->textsRepository->getOneTextById(1);
        $text[2] = $this->textsRepository->getOneTextById(2);
        $text[3] = $this->textsRepository->getOneTextById(3);
        $text[4] = $this->textsRepository->getOneTextById(4);
        $text[5] = $this->textsRepository->getOneTextById(5);
        $text[6] = $this->textsRepository->getOneTextById(6);
        $text[7] = $this->textsRepository->getOneTextById(7);

        $this->header = view( 'admin.editsite.header')->with('text', $text)->render();
    }

    private function renderAboutUs() {
        $text = [];

        $text[8] = $this->textsRepository->getOneTextById(8);
        $text[9] = $this->textsRepository->getOneTextById(9);

        $this->aboutUs = view( 'admin.editsite.about_us')->with('text', $text)->render();
    }

    private function renderTheBenefitsOfEarlySwimming() {
        $text = [];

        $text[10] = $this->textsRepository->getOneTextById(10);
        $text[11] = $this->textsRepository->getOneTextById(11);
        $text[12] = $this->textsRepository->getOneTextById(12);
        $text[13] = $this->textsRepository->getOneTextById(13);
        $text[14] = $this->textsRepository->getOneTextById(14);
        $text[15] = $this->textsRepository->getOneTextById(15);
        $text[16] = $this->textsRepository->getOneTextById(16);
        $text[17] = $this->textsRepository->getOneTextById(17);
        $text[18] = $this->textsRepository->getOneTextById(18);
        $text[19] = $this->textsRepository->getOneTextById(19);
        $text[20] = $this->textsRepository->getOneTextById(20);
        $text[21] = $this->textsRepository->getOneTextById(21);
        $text[22] = $this->textsRepository->getOneTextById(22);

        $this->theBenefitsOfEarlySwimming = view('admin.editsite.the_benefits_of_early_swimming')->with('text', $text)->render();
    }

    private function renderWhoSwimsWithUs() {
        $text = [];

        $text[23] = $this->textsRepository->getOneTextById(23);
        $text[24] = $this->textsRepository->getOneTextById(24);
        $text[25] = $this->textsRepository->getOneTextById(25);
        $text[26] = $this->textsRepository->getOneTextById(26);
        $text[27] = $this->textsRepository->getOneTextById(27);
        $text[28] = $this->textsRepository->getOneTextById(28);
        $text[29] = $this->textsRepository->getOneTextById(29);
        $text[30] = $this->textsRepository->getOneTextById(30);
        $text[31] = $this->textsRepository->getOneTextById(31);
        $text[39] = $this->textsRepository->getOneTextById(39);

        $this->whoSwimsWithUs = view('admin.editsite.who_swims_with_us')->with('text', $text)->render();
    }

    private function renderTrainers() {
        $text = [];

        $text[32] = $this->textsRepository->getOneTextById(32);
        $text[33] = $this->textsRepository->getOneTextById(33);

        $trainers = $this->trainersRepository->getTrainers();
        $this->trainers = view('admin.editsite.trainers')->with(['trainers' => $trainers, 'text' => $text ])->render();
    }

    private function renderSwimNeverNotEarly() {
        $text = [];

        $text[34] = $this->textsRepository->getOneTextById(34);
        $text[35] = $this->textsRepository->getOneTextById(35);

        $this->swimNeverNotEarly = view('admin.editsite.swim_never_not_early')->with('text', $text)->render();
    }

    private function renderSecurity() {
        $text = [];

        $text[36] = $this->textsRepository->getOneTextById(36);
        $text[37] = $this->textsRepository->getOneTextById(37);
        $text[38] = $this->textsRepository->getOneTextById(38);

        $this->security = view('admin.editsite.security')->with('text', $text)->render();
    }

    protected function editText(Request $request) {
        return $this->textsRepository->updateText($request);
    }
}
