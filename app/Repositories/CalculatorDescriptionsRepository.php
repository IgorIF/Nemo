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

    public function update(array $data, string $formName, string $fieldName): CalculatorDescription
    {
        $calculatorDescription = $this->model->where('form_name', $formName)->where('field_name', $fieldName)->first();

        foreach ($data as $key => $value) {
            $calculatorDescription->fill([$key => $value]);
        }

        $calculatorDescription->update();

        return $calculatorDescription;
    }
}
