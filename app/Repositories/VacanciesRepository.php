<?php


namespace App\Repositories;


use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacanciesRepository extends Repository
{
    public function __construct(Vacancy $vacancy)
    {
        $this->model = $vacancy;
    }

    /**
     * @param Request $request
     * @return Vacancy
     */
    public function createVacancy(Request $request): Vacancy
    {
        return $this->model::create([
            'text' => $request->get('text'),
        ]);
    }

    /**
     * @param Request $request
     * @param int $id
     */
    public function updateVacancy(Request $request, int $id)
    {
        $vacancy = $this->model::find($id);
        $vacancy->fill(['text' => $request->get('text')]);
        $vacancy->update();
    }
}
