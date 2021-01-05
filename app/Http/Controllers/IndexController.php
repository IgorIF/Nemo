<?php

namespace App\Http\Controllers;

use App\Mail\TrialLesson;
use App\Repositories\SecurityCategoriesRepository;
use App\Repositories\TextsRepository;
use App\Repositories\TrainersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{

    protected $textsRepository;
    protected $trainersRepository;
    protected $securityCategoriesRepository;

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

    protected $template;        //шаблон
    protected $vars = [];       //массив с данными которые передаюся в шаблон

    /**
     * IndexController constructor.
     * @param TextsRepository $textsRepository
     * @param TrainersRepository $trainersRepository
     */
    public function __construct(TextsRepository $textsRepository, TrainersRepository $trainersRepository, SecurityCategoriesRepository $securityCategoriesRepository)
    {
        $this->textsRepository = $textsRepository;
        $this->trainersRepository = $trainersRepository;
        $this->securityCategoriesRepository = $securityCategoriesRepository;
        $this->template = 'site.index';
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
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

        return $this->renderOutput();
    }

    protected function renderOutput() {
        $howWeSwim = view('site.how_we_swim')->render();

        $this->vars = Arr::add($this->vars, 'header', $this->header);
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

        return view($this->template)->with($this->vars);
    }

    private function renderHeader() {
        $texts = $this->textsRepository->getInRangeById([1 => 15]);
        $this->header = view( 'site.header')->with('texts', $texts)->render();
    }

    private function renderAboutUs() {
        $texts = $this->textsRepository->getInRangeById([16 => 17]);
        $this->aboutUs = view( 'site.about_us')->with('texts', $texts)->render();
    }

    private function renderTheBenefitsOfEarlySwimming() {
        $texts = $this->textsRepository->getInRangeById([18 => 30]);
        $this->theBenefitsOfEarlySwimming = view('site. the_benefits_of_early_swimming')->with('texts', $texts)->render();
    }

    private function renderWhoSwimsWithUs() {
        $texts = $this->textsRepository->getInRangeById([31 => 40]);
        $this->whoSwimsWithUs = view('site.who_swims_with_us')->with('texts', $texts)->render();
    }

    private function renderTrainers() {
        $texts = $this->textsRepository->getInRangeById([41 => 42]);
        $trainers = $this->trainersRepository->getTrainers();
        $this->trainers = view('site.trainers')->with(['trainers' => $trainers, 'texts' => $texts ])->render();
    }

    private function renderPrices() {
        $texts = $this->textsRepository->getInRangeById([43 => 43]);
        $this->prices = view('site.prices')->with('texts', $texts)->render();
    }

    private function renderSwimNeverNotEarly() {
        $texts = $this->textsRepository->getInRangeById([44 => 45]);
        $this->swimNeverNotEarly = view('site.swim_never_not_early')->with('texts', $texts)->render();
    }

    private function renderSecurity() {
        $texts = $this->textsRepository->getInRangeById([46 => 47]);
        $securityCategories = $this->securityCategoriesRepository->getAll();
        $this->security = view('site.security')->with(['texts' => $texts, 'securityCategories' => $securityCategories])->render();
    }

    private function renderReviews() {
        $texts = $this->textsRepository->getInRangeById([48 => 48]);
        $this->reviews = view('site.reviews')->with('texts', $texts)->render();
    }

    private function renderSwimmingPool() {
        $texts = $this->textsRepository->getInRangeById([49 => 54]);
        $this->swimmingPool = view('site.swimming_pool')->with('texts', $texts)->render();
    }

    private function renderFooter() {
        $texts = $this->textsRepository->getInRangeById([55 => 62, 1 => 2, 4 => 5, 7 => 8, 10 => 11]);
        $this->footer = view('site.footer')->with('texts', $texts)->render();
    }


    public function sendMail(Request $request){

        $data = $request->except('_token');

        $address = '';

        switch ($data['select_pool']) {
            case 1:
                $data['select_pool'] = 'Пражская';
                $address = 'aquaclubnemo@yandex.ru';
                break;
            case 2:
                $data['select_pool'] = 'Академическая';
                $address = 'aquanemoclub@yandex.ru';
                break;
            case 3:
                $data['select_pool'] = 'Марьино';
                $address = 'aquaclubnemo.m@yandex.ru';
                break;
            case 4:
                $data['select_pool'] = 'Некрасовка';
                $address = 'aquaclubnemo.l@yandex.ru';
                break;
        }

        Mail::to($address)->send(new TrialLesson($data));
        return redirect('/');
    }
}
