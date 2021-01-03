<?php

namespace App\Http\Controllers;

use App\Mail\TrialLesson;
use App\Repositories\TextsRepository;
use App\Repositories\TrainersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{

    protected $textsRepository;
    protected $trainersRepository;

    private $header;
    private $aboutUs;
    private $theBenefitsOfEarlySwimming;
    private $whoSwimsWithUs;
    private $trainers;

    protected $template;        //шаблон
    protected $vars = [];       //массив с данными которые передаюся в шаблон

    /**
     * IndexController constructor.
     * @param TextsRepository $textsRepository
     * @param TrainersRepository $trainersRepository
     */
    public function __construct(TextsRepository $textsRepository, TrainersRepository $trainersRepository)
    {
        $this->textsRepository = $textsRepository;
        $this->trainersRepository = $trainersRepository;
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

        return $this->renderOutput();
    }

    protected function renderOutput() {
        $prices = view('site.prices')->render();
        $swimNeverNotEarly = view('site.swim_never_not_early')->render();
        $howWeSwim = view('site.how_we_swim')->render();
        $security = view('site.security')->render();
        $reviews = view('site.reviews')->render();
        $swimmingPool = view('site.swimming_pool')->render();
        $footer = view('site.footer')->render();

        $this->vars = Arr::add($this->vars, 'header', $this->header);
        $this->vars = Arr::add($this->vars, 'aboutUs', $this->aboutUs);
        $this->vars = Arr::add($this->vars, 'theBenefitsOfEarlySwimming', $this->theBenefitsOfEarlySwimming);
        $this->vars = Arr::add($this->vars, 'whoSwimsWithUs', $this->whoSwimsWithUs);
        $this->vars = Arr::add($this->vars, 'trainers', $this->trainers);
        $this->vars = Arr::add($this->vars, 'prices', $prices);
        $this->vars = Arr::add($this->vars, 'swimNeverNotEarly', $swimNeverNotEarly);
        $this->vars = Arr::add($this->vars, 'howWeSwim', $howWeSwim);
        $this->vars = Arr::add($this->vars, 'security', $security);
        $this->vars = Arr::add($this->vars, 'reviews', $reviews);
        $this->vars = Arr::add($this->vars, 'swimmingPool', $swimmingPool);
        $this->vars = Arr::add($this->vars, 'footer', $footer);

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
