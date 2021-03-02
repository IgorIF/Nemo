<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotions')->insert([
            'name' => 'В день пробного <br>занятия',
            'percent' => '10',
            'image' => 'akcii__1.png'
        ]);

        DB::table('promotions')->insert([
            'name' => 'За приведенного <br>друга',
            'percent' => '10',
            'image' => 'akcii__2.png'
        ]);

        DB::table('promotions')->insert([
            'name' => 'На второго ребенка',
            'percent' => '10',
            'image' => 'akcii__3.png'
        ]);

        DB::table('promotions')->insert([
            'name' => 'Особенным <br>деткам',
            'percent' => '10',
            'image' => 'akcii__4.png'
        ]);
    }
}
