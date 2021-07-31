<?php

namespace App\Repositories;

use App\Models\NumberOfLessons;
use App\Models\Pool;

class NumberOfLessonsRepository extends Repository
{
    public function __construct(NumberOfLessons $numberOfLessons)
    {
        $this->model = $numberOfLessons;
    }
}
