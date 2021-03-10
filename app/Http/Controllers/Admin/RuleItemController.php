<?php

namespace App\Http\Controllers\Admin;

use App\Models\RuleItem;
use Illuminate\Http\Request;

class RuleItemController extends IndexController
{

    /**
     * @param Request $request
     * @return RuleItem
     */
    public function store(Request $request): RuleItem
    {
        $request->validate([
            'text' => 'required'
        ]);

        return $this->ruleItemsRepository->create($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     */
    public function update(Request $request, int $id)
    {
        $this->ruleItemsRepository->update($request, $id);
    }

    /**
     * @param int $id
     */
    public function destroy(int $id)
    {
        $this->ruleItemsRepository->delete($id);
    }
}
