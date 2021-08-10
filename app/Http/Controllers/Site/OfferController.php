<?php

namespace App\Http\Controllers\Site;

class OfferController extends SiteController
{
    public function __invoke(): string
    {
        $this->getTextsData();
        $this->getFilialsData();

        return $this->renderOutput();
    }

    protected function renderOutput(): string
    {
        $root = $this->rootView();
        return $root->with('content', $this->renderOffer())->render();
    }

    protected function renderOffer(): string
    {
        return view('site.offer.index')->render();
    }
}
