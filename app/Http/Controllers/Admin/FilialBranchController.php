<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class FilialBranchController extends IndexController
{

    /**
     * @param Request $request
     * @param int $id
     * @return string|null
     */
    public function update(Request $request, int $id): ?string
    {
        $action = $request->get('action');
        $data = $request->except(['_method', 'action']);

        switch ($action) {
            case 'priceUpdate':
                return $this->filialBranchesRepository->priceUpdate($data, $id);
            case 'textUpdate':
                $this->filialBranchesRepository->textUpdate($data, $id);
                return null;
        }
    }
}
