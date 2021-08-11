<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferAppController extends SiteController
{
    public function __invoke(): string
    {
        return $this->renderOutput();
    }

    protected function renderOutput(): string
    {
        return view('site.index')->with(['content' => $this->renderOffer(), 'offWhatsApp' => true])->render();
    }

    protected function renderOffer(): string
    {
        return view('site.offer.index')->render();
    }
}
