<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AdminController extends Controller
{
    protected $trainersRepository;

    protected $title;
    protected $content;

    protected $template;        //шаблон
    protected $vars = [];       //массив с данными которые передаюся в шаблон

    public function __construct()
    {
        //
    }

    protected function renderOutput() {

        $header = view( 'admin.header')->render();
        $footer = view('admin.footer')->render();

        $this->vars = Arr::add($this->vars, 'title', $this->title);
        $this->vars = Arr::add($this->vars, 'header', $header);
        $this->vars = Arr::add($this->vars, 'content', $this->content);
        $this->vars = Arr::add($this->vars, 'footer', $footer);

        return view($this->template)->with($this->vars);
    }
}
