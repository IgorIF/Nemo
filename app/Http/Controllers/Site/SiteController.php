<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\BaseController;
use Illuminate\Support\Arr;

abstract class SiteController extends BaseController
{
    protected function rootView()
    {
        $vars = [];
        $vars = Arr::add($vars, 'header', $this->renderHeader());
        $vars = Arr::add($vars, 'footer', $this->renderFooter());
        $vars = Arr::add($vars, 'signUpModal', $this->renderSignUpModal());
        return view('site.index')->with($vars);
    }

    protected function renderHeader(): string {
        $texts = $this->getFromCollection($this->texts, [1 => 2]);
        return view( 'site.header')->with(['texts' => $texts, 'filials' => $this->filials])->render();
    }

    protected function renderFooter(): string {
        return view('site.footer')->render();
    }

    protected function renderSignUpModal(): string {
        return view('site.modal_sign_up')->with('filials', $this->filials)->render();
    }

}
