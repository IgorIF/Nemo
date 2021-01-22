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
        DB::table('images')->insert([
            'id' => '1',
            'image' => 'baby2.png'
        ]);

        /*DB::table('images')->insert([
            'id' => '2',
            'image' => ''
        ]);

        DB::table('images')->insert([
            'id' => '3',
            'image' => ''
        ]);

        DB::table('images')->insert([
            'id' => '4',
            'image' => ''
        ]);

        DB::table('images')->insert([
            'id' => '5',
            'image' => ''
        ]);

        DB::table('images')->insert([
            'id' => '6',
            'image' => ''
        ]);*/
    }
}
