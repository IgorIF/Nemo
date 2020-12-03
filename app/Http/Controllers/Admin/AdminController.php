<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $trainersRepository;

    protected $template = 'admin';    //шаблон
    protected $vars = [];   //массив с данными которые передаюся в шаблон

    public function __construct()
    {
        //
    }

    protected function renderOutput() {
        return view($this->template)->with($this->vars);
    }
}
