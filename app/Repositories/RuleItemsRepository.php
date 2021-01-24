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

    public function updateRuleItem(Request $request, int $id): array
    {
        $result = [];

        $ruleItem = RuleItem::find($id);

        $ruleItem->fill(['text' => $request->get('text')]);
        $ruleItem->update();

        $result['status'] = true;

        return $result;
    }

    public function destroyRuleItem(int $id)
    {
        $result = [];

        $ruleItem = RuleItem::find($id);
        $ruleItem->delete();

        $result['status'] = true;

        return $result;
    }
}
