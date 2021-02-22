<?php

namespace App\Repositories;

use App\Models\RuleCategory;
use App\Models\RuleItem;
use Illuminate\Http\Request;

class RuleItemsRepository extends Repository
{
    public function __construct(RuleItem $ruleItem)
    {
        $this->model = $ruleItem;
    }

    /**
     * @param Request $request
     * @return RuleItem
     */
    public function create(Request $request): RuleItem
    {
        $ruleCategory = RuleCategory::find($request->get('ruleCategoryId'));

        $ruleItem = $this->model::create([
            'text' => $request->get('text'),
        ]);

        $ruleCategory->ruleItems()->save($ruleItem);

        return $ruleItem;
    }

    /**
     * @param Request $request
     * @param int $id
     */
    public function update(Request $request, int $id)
    {
        $ruleItem = $this->model::find($id);
        $ruleItem->fill(['text' => $request->get('text')]);
        $ruleItem->update();
    }
}
