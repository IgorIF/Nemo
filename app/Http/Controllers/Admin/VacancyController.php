<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends IndexController
{
    /**
     * @param Request $request
     * @return Vacancy
     */
    public function store(Request $request): Vacancy
    {
        $request->validate([
            'text' => 'required'
        ]);

        return $this->vacanciesRepository->create($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     */
    public function update(Request $request, int $id)
    {
        $this->vacanciesRepository->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy(int $id)
    {
        $this->vacanciesRepository->delete($id);
    }
}
