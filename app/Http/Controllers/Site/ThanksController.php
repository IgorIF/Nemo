<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ThanksController extends SiteController
{
    private string $template = 'site.thanks';

    public function __invoke(): string
    {
        $this->getTextsData();
        $this->getFilialsData();


        $root = $this->renderRoot();

        return $root->with('content', $this->renderThanks())->render();
    }

    private function renderThanks(): string
    {
        return view( $this->template . '.thanks')->render();
    }

    /*protected function renderOutput(): string
    {
        parent::renderOutput();
        $this->siteVars = Arr::add($this->siteVars, 'thanks', $this->renderThanks());
        return view($this->template . '.index')->with($this->siteVars);
    }*/
}
