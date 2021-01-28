<?php


namespace App\Repositories;

use App\Models\SecurityCategory;
use App\Models\SecurityItem;
use App\Models\Trainer;
use Illuminate\Http\Request;

class SecurityItemsRepository extends Repository
{
    public function __construct(SecurityItem $securityItem)
    {
        $this->model = $securityItem;
    }

    public function updateSecurityItem(Request $request, int $id)
    {
        $securityItem = SecurityItem::find($id);

        $securityItem->fill(['text' => $request->get('text')]);
        $securityItem->update();
    }

    public function destroySecurityItem($id)
    {
        $securityItem = SecurityItem::find($id);
        $securityItem->delete();
    }

    public function createSecurityItem(Request $request)
    {
        $result = [];

        $securityCategory = SecurityCategory::find($request->get('securityCategoryId'));

        $securityItem = SecurityItem::create([
           'text' => $request->get('text'),
        ]);

        $securityCategory->securityItems()->save($securityItem);

        $result['securityItem'] = $securityItem;
        $result['status'] = true;

        return $result;
    }
}
