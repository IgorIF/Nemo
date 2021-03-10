<?php

namespace App\Http\Controllers\Admin;

use App\Models\SecurityItem;
use Illuminate\Http\Request;

class SecurityItemController extends IndexController
{

    /**
     * @param Request $request
     * @return SecurityItem
     */
    public function store(Request $request): SecurityItem
    {
        $request->validate([
            'text' => 'required'
        ]);

        return $this->securityItemsRepository->create($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     */
    public function update(Request $request, int $id)
    {
        $this->securityItemsRepository->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy(int $id)
    {
        $this->securityItemsRepository->delete($id);
    }
}
