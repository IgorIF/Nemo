<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class SecurityCategoryController extends IndexController
{
    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     */
    public function update(Request $request, int $id)
    {
        $this->securityCategoriesRepository->update($request, $id);
    }
}
