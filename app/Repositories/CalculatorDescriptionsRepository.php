<?php

namespace App\Repositories;

use App\Models\CalculatorDescription;

class CalculatorDescriptionsRepository extends Repository
{
    public function __construct(CalculatorDescription $calculatorDescription)
    {
        $this->model = $calculatorDescription;
    }

    public function getAllInJson() {
        $descriptions = parent::getAll();

        $arr = [];

        foreach ($descriptions as $description) {
            $arr[$description->form_name][$description->field_name]['title'] = $description->title;
            $arr[$description->form_name][$description->field_name]['body'] = $description->body;
        }

        return json_encode($arr);
    }
}
