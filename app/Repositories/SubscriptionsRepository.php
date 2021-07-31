<?php

namespace App\Repositories;

use App\Models\Subscription;

class SubscriptionsRepository extends Repository
{
    public function __construct(Subscription $subscription)
    {
        $this->model = $subscription;
    }
}
