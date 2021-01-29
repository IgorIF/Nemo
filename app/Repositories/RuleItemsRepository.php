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
    public function createRuleItem(Request $request): RuleItem
    {
        $ruleCategory = RuleCategory::find($request->get('ruleCategoryId'));

        $ruleItem = RuleItem::create([
            'text' => $request->get('text'),
        ]);

        $ruleCategory->ruleItems()->save($ruleItem);

        return $ruleItem;
    }

    /**
     * @param Request $request
     * @param int $id
     */
    public function updateRuleItem(Request $request, int $id)
    {
        $ruleItem = RuleItem::find($id);

        $ruleItem->fill(['text' => $request->get('text')]);
        $ruleItem->update();
    }


    /**
     * @param int $id
     */
    public function destroyRuleItem(int $id)
    {
        $ruleItem = RuleItem::find($id);
        $ruleItem->delete();
    }
}
