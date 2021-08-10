<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\BaseController;
use Illuminate\Support\Arr;

abstract class SiteController extends BaseController
{
    private string $template = 'site';

    protected function rootView()
    {
        $vars = [];
        $vars = Arr::add($vars, 'header', $this->renderHeader());
        $vars = Arr::add($vars, 'footer', $this->renderFooter());
        return view('site' . '.index')->with($vars);
    }

    protected function renderHeader(): string {
        $texts = $this->getFromCollection($this->texts, [1 => 2]);
        return view( 'site' . '.header')->with(['texts' => $texts, 'filials' => $this->filials])->render();
    }

    protected function renderFooter(): string {
        return view($this->template . '.footer')->render();
    }

}
