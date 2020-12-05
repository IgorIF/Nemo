<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AdminController extends Controller
{
    protected $trainersRepository;

    protected $content;

    protected $template;        //шаблон
    protected $vars = [];       //массив с данными которые передаюся в шаблон

    public function __construct()
    {
        //
    }

    protected function renderOutput() {

        $header = view(env('THEME') . 'admin.header')->render();

        $this->vars = Arr::add($this->vars, 'header', $header);
        $this->vars = Arr::add($this->vars, 'content', $this->content);

        return view($this->template)->with($this->vars);
    }
}
