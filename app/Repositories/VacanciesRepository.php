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
        return Vacancy::create([
            'text' => $request->get('text'),
        ]);
    }
}
