<?php

namespace App\Http\Controllers\Site;

class ScheduleController extends SiteController
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
        return $root->with('content', $this->renderSchedule())->render();
    }

    private function renderSchedule(): string
    {
        return view('site.schedule.index')->render();
    }
}
