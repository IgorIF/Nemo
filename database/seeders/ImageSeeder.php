<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // header
        DB::table('images')->insert([
            'id' => 1,
            'image' => 'description-bg.jpg',
        ]);


        // the benefits of early swimming
        DB::table('images')->insert([
            'id' => 2,
            'image' => 'baby2.png',
        ]);


        // who swims with us
        DB::table('images')->insert([
            'id' => 3,
            'image' => 'baby-tab-1.png',
        ]);

        DB::table('images')->insert([
            'id' => 4,
            'image' => 'baby-tab-2.png',
        ]);

        DB::table('images')->insert([
            'id' => 5,
            'image' => 'baby-tab-3.png',
        ]);
    }
}
