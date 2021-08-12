<?php

namespace App\Http\Controllers\Site;

class ThanksController extends SiteController
{
    public function __invoke(): string
    {
        $this->getTextsData();
        $this->getFilialsData();

        return $this->renderOutput();
    }

    protected function renderOutput(): string
    {
        $root = $this->rootView('Записаться на занятие');
        return $root->with('content', $this->renderThanks())->render();
    }

    private function renderThanks(): string
    {
        return view('site.thanks.index')->render();
    }
}
