<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'id' => 1,
            'image' => 'about.jpg',
            'url' => 'ode_TmoV848'
        ]);

        DB::table('videos')->insert([
            'image' => 'review1.jpg',
            'url' => '16ovQFNQux0'
        ]);

        DB::table('videos')->insert([
            'image' => 'review2.jpg',
            'url' => 'wwQ9YcuhsD8'
        ]);

        DB::table('videos')->insert([
            'image' => 'review3.jpg',
            'url' => 'du1fom_ZwKk'
        ]);

        DB::table('videos')->insert([
            'image' => 'review4.jpg',
            'url' => 'gl7CivN8PeU'
        ]);

        DB::table('videos')->insert([
            'image' => 'review5.jpg',
            'url' => 'AVXmfnJ2mMk'
        ]);

        DB::table('videos')->insert([
            'image' => 'review6.jpg',
            'url' => 'yFSAI2pVQiw'
        ]);

        DB::table('videos')->insert([
            'image' => 'review7.jpg',
            'url' => '85XpTbpCqBs'
        ]);

        DB::table('videos')->insert([
            'image' => 'review8.jpg',
            'url' => '8znWlmOxs3Q'
        ]);

        DB::table('videos')->insert([
            'image' => 'review9.jpg',
            'url' => 'lEW0Iz9AAOs'
        ]);

        DB::table('videos')->insert([
            'image' => 'review10.jpg',
            'url' => 'eFmj2PABG28'
        ]);
    }
}
