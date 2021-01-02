<?php


namespace App\Repositories;

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
        $result = [];

        $securityItem = SecurityItem::find($id);

        $securityItem->fill(['text' => $request->get('text')]);
        $securityItem->update();

        $result['status'] = true;

        return $result;
    }
}
