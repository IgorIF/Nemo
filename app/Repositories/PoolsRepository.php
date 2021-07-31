<?php

namespace App\Repositories;

use App\Models\Pool;

class PoolsRepository extends Repository
{
    public function __construct(Pool $pool)
    {
        $this->model = $pool;
    }
}
