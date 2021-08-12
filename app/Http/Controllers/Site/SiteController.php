<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\BaseController;
use Illuminate\Support\Arr;

abstract class SiteController extends BaseController
{
    protected function rootView($title = 'Акваклуб Немо')
    {
        $vars = [];
        $vars = Arr::add($vars, 'title', $title);
        $vars = Arr::add($vars, 'header', $this->renderHeader());
        $vars = Arr::add($vars, 'footer', $this->renderFooter());
        $vars = Arr::add($vars, 'signUpModal', $this->renderSignUpModal());
        $vars = Arr::add($vars, 'vacanciesModal', $this->renderVacanciesModal());
        return view('site.index')->with($vars);
    }

    private function renderHeader(): string {
        $texts = $this->getFromCollection($this->texts, [1 => 2]);
        return view( 'site.header')->with(['texts' => $texts, 'filials' => $this->filials])->render();
    }

    private function renderFooter(): string {
        return view('site.footer')->render();
    }

    private function renderSignUpModal(): string {
        return view('site.modal_sign_up')->with('filials', $this->filials)->render();
    }

    private function renderVacanciesModal(): string {
        return view('site.modal_vacancies')->render();
    }

}
