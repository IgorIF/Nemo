<?php


namespace App\Repositories;

use App\Models\SecurityCategory;
use App\Models\SecurityItem;
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

    /**
     * @param Request $request
     * @return SecurityItem
     */
    public function createSecurityItem(Request $request): SecurityItem
    {
        $securityCategory = SecurityCategory::find($request->get('securityCategoryId'));

        $securityItem = SecurityItem::create([
           'text' => $request->get('text'),
        ]);

        $securityCategory->securityItems()->save($securityItem);

        return $securityItem;
    }
}
