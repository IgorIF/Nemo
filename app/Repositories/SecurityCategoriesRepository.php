<?php


namespace App\Repositories;

use App\Models\SecurityCategory;
use Illuminate\Http\Request;

class SecurityCategoriesRepository extends Repository
{
    public function __construct(SecurityCategory $securityCategory)
    {
        $this->model = $securityCategory;
    }

    /**
     * @param Request $request
     * @param int $id
     */
    public function updateSecurityCategory(Request $request, int $id)
    {
        $securityCategory = SecurityCategory::find($id);

        $securityCategory->fill(['text' => $request->get('text')]);
        $securityCategory->update();
    }
}
