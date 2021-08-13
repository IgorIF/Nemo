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

    public function tariffs(): string
    {
        return view('site.index')->with(['content' => $this->renderTariffs(), 'offWhatsApp' => true, 'title' => 'Тарифы'])->render();
    }

    protected function renderOutput(): string
    {
        return view('site.index')->with(['content' => $this->renderOffer(), 'offWhatsApp' => true, 'title' => 'Публичная оферта'])->render();
    }

    protected function renderOffer(): string
    {
        return view('site.offer.index')->render();
    }

    protected function renderTariffs(): string
    {
        return view('site.tariffs.index')->render();
    }
}
