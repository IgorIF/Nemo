<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CalculatorDescription;
use Illuminate\Http\Request;

class CalculatorDescriptionController extends IndexController
{
    /**
     * @param Request $request
     * @param $formName
     * @param $fieldName
     */
    public function update(Request $request, $formName, $fieldName)
    {
        $data = $request->except('_method');
        $this->calculatorDescriptionsRepository->update($data, $formName, $fieldName);
    }
}
