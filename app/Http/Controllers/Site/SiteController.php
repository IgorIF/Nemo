<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

abstract class SiteController extends BaseController
{

    protected array $siteVars = [];

    protected string $template = 'site';

    protected function renderHeader(): string {
        $texts = $this->getFromCollection($this->texts, [1 => 2]);
        return view( $this->template . '.header')->with(['texts' => $texts, 'filials' => $this->filials])->render();
    }

}
