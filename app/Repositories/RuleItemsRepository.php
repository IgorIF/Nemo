<?php


namespace App\Repositories;

use App\Models\RuleItem;
use App\Models\SecurityItem;
use Illuminate\Http\Request;


class RuleItemsRepository extends Repository
{
    public function __construct(RuleItem $ruleItem)
    {
        $this->model = $ruleItem;
    }

    public function updateRuleItem(Request $request, int $id)
    {
        $ruleItem = RuleItem::find($id);

        $ruleItem->fill(['text' => $request->get('text')]);
        $ruleItem->update();
    }

    public function destroyRuleItem(int $id)
    {
        $ruleItem = RuleItem::find($id);
        $ruleItem->delete();
    }
}
