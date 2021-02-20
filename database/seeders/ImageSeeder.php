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
    }
}
