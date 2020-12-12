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

        //$header = view( 'admin.header')->render();
        //$footer = view('admin.footer')->render();

        $this->vars = Arr::add($this->vars, 'trainers', $this->trainers);

        return view($this->template)->with($this->vars);
    }
}
