<?php

namespace Database\Seeders;

use App\Models\FilialBranch;
use Illuminate\Database\Seeder;

class PricesHovrino extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filial = FilialBranch::find(5);
        $filial->fill(['prices' => json_encode([
        'trial' => 980,
        'oneoff' => 1500,
        4 => [
            'standard' => 5600,
            'loyal' => 6800
        ],
        8 => [
            'standard' => 9900,
            'loyal' => 11800
        ],
        12 => [
            'standard' => 13500,
            'loyal' => 16200
        ],
    ])]);
        $filial->update();
    }
}
