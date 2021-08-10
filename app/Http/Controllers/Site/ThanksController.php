<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ThanksController extends SiteController
{

    protected string $template = 'site.thanks';

    public function __invoke(): string
    {
        return $this->renderOutput();
    }

    private function renderThanks(): string
    {
        return view( $this->template . '.thanks')->render();
    }

    protected function renderOutput(): string
    {
        $this->siteVars = Arr::add($this->siteVars, 'thanks', $this->renderThanks());
        return view($this->template . '.index')->with($this->siteVars);
    }
}
