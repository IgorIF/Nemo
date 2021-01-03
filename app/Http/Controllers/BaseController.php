<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class BaseController extends Controller
{
    protected $trainersRepository;

    protected $trainers;

    protected $template;        //шаблон
    protected $vars = [];       //массив с данными которые передаюся в шаблон

    public function __construct()
    {
        //
    }

    protected function renderOutput() {
        $header = view( 'site.header')->render();
        $aboutUs = view( 'site.about_us')->render();
        $theBenefitsOfEarlySwimming = view('site. the_benefits_of_early_swimming')->render();
        $whoSwimsWithUs = view('site.who_swims_with_us')->render();
        $prices = view('site.prices')->render();
        $swimNeverNotEarly = view('site.swim_never_not_early')->render();
        $howWeSwim = view('site.how_we_swim')->render();
        $security = view('site.security')->render();
        $reviews = view('site.reviews')->render();
        $swimmingPool = view('site.swimming_pool')->render();
        $footer = view('site.footer')->render();

        $this->vars = Arr::add($this->vars, 'header', $header);
        $this->vars = Arr::add($this->vars, 'aboutUs', $aboutUs);
        $this->vars = Arr::add($this->vars, 'theBenefitsOfEarlySwimming', $theBenefitsOfEarlySwimming);
        $this->vars = Arr::add($this->vars, 'whoSwimsWithUs', $whoSwimsWithUs);
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
}
