<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleController extends SiteController
{
    private string $template = 'site.schedule';

    public function __invoke(): string
    {
        $this->getTextsData();
        $this->getFilialsData();

        return $this->renderOutput();
    }

    protected function renderOutput(): string
    {
        $root = $this->rootView();
        return $root->with('content', $this->renderSchedule())->render();
    }

    private function renderSchedule(): string
    {
        return view( $this->template . '.index')->render();
    }
}
