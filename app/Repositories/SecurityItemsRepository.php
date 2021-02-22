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

    /**
     * @param Request $request
     * @return SecurityItem
     */
    public function createSecurityItem(Request $request): SecurityItem
    {
        $securityCategory = SecurityCategory::find($request->get('securityCategoryId'));

        $securityItem = $this->model::create([
           'text' => $request->get('text'),
        ]);

        $securityCategory->securityItems()->save($securityItem);

        return $securityItem;
    }

    /**
     * @param Request $request
     * @param int $id
     */
    public function updateSecurityItem(Request $request, int $id)
    {
        $securityItem = $this->model::find($id);

        $securityItem->fill(['text' => $request->get('text')]);
        $securityItem->update();
    }

    /**
     * @param int $id
     */
    public function destroySecurityItem(int $id)
    {
        $securityItem = $this->model::find($id);
        $securityItem->delete();
    }
}
