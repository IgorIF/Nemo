<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Repositories\TrainersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class EditSite extends Controller
{

    protected $trainersRepository;

    protected $trainers;

    protected $template;        //шаблон
    protected $vars = [];       //массив с данными которые передаюся в шаблон

    /**
     * EditSite constructor.
     */
    public function __construct(TrainersRepository $trainersRepository)
    {
        $this->trainersRepository = $trainersRepository;
        $this->template = 'site.index';
    }


    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $trainers = $this->trainersRepository->getTrainers();

        $this->trainers = view('admin.editsite.trainers')->with('trainers', $trainers)->render();

        return $this->renderOutput();
    }

    protected function renderOutput() {
        $header = view( 'admin.editsite.header')->render();
        $aboutUs = view( 'admin.editsite.about_us')->render();
        $theBenefitsOfEarlySwimming = view('admin.editsite. the_benefits_of_early_swimming')->render();
        $whoSwimsWithUs = view('admin.editsite.who_swims_with_us')->render();
        $prices = view('admin.editsite.prices')->render();
        $swimNeverNotEarly = view('admin.editsite.swim_never_not_early')->render();
        $howWeSwim = view('admin.editsite.how_we_swim')->render();
        $security = view('admin.editsite.security')->render();
        $reviews = view('admin.editsite.reviews')->render();
        $swimmingPool = view('admin.editsite.swimming_pool')->render();
        $footer = view('admin.editsite.footer')->render();

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
