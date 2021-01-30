<?php


namespace App\Repositories;


use App\Models\Vacancy;

class VacanciesRepository extends Repository
{
    public function __construct(Vacancy $vacancy)
    {
        $this->model = $vacancy;
    }
}
