<?php


namespace App\Repositories;

use App\Models\SecurityCategory;

class SecurityCategoriesRepository extends Repository
{
    public function __construct(SecurityCategory $securityCategory)
    {
        $this->model = $securityCategory;
    }
}
