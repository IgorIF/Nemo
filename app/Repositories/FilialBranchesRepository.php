<?php

namespace App\Repositories;

use App\Models\FilialBranch;

class FilialBranchesRepository extends Repository
{
    public function __construct(FilialBranch $filialBranch)
    {
        $this->model = $filialBranch;
    }
}
