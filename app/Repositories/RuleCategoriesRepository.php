<?php

namespace App\Repositories;

use App\Models\RuleCategory;

class RuleCategoriesRepository extends Repository
{
    public function __construct(RuleCategory $ruleCategory)
    {
        $this->model = $ruleCategory;
    }
}
