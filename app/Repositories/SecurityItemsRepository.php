<?php


namespace App\Repositories;

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
        $result = [];

        $securityItem = SecurityItem::find($id);

        $securityItem->fill(['text' => $request->get('text')]);
        $securityItem->update();

        $result['status'] = true;

        return $result;
    }

    public function destroySecurityItem($id)
    {
        $result = [];

        $securityItem = SecurityItem::find($id);
        $securityItem->delete();

        $result['status'] = true;

        return $result;
    }
}
