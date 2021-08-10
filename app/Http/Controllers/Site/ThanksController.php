<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ThanksController extends SiteController
{

    public function __invoke() {



    }

    protected function renderOutput(): string
    {
        $this->baseVars = Arr::add($this->baseVars, 'header', $this->renderHeader());

        return view('.index')->with($this->baseVars);
    }
}
