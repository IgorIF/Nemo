<?php

namespace Database\Seeders;

use App\Models\Filial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricesHovrino extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('filial_branches')->insert([
            'id' => 5,
            'alias' => 'rechnoy_vokzal',
            'address' => 'ул. Петрозаводская 11, к2 (скоро открытие)',
            'phone' => '+7(977)680-02-77',
            'metro' => 'Речной вокзал',
        ]);

        /*$filial = Filial::c(5);
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
        $filial->update();*/
    }
}
