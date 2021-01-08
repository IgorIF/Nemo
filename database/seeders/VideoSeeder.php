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
            'url' => 'https://www.youtube.com/embed/ode_TmoV848?autoplay=1'
        ]);

        DB::table('videos')->insert([
            'image' => 'review1.jpg',
            'url' => 'https://www.youtube.com/embed/16ovQFNQux0?autoplay=1'
        ]);

        DB::table('videos')->insert([
            'image' => 'review2.jpg',
            'url' => 'https://www.youtube.com/embed/wwQ9YcuhsD8?autoplay=1'
        ]);

        DB::table('videos')->insert([
            'image' => 'review3.jpg',
            'url' => 'https://www.youtube.com/embed/du1fom_ZwKk?autoplay=1'
        ]);

        DB::table('videos')->insert([
            'image' => 'review4.jpg',
            'url' => 'https://www.youtube.com/embed/gl7CivN8PeU?autoplay=1'
        ]);

        DB::table('videos')->insert([
            'image' => 'review5.jpg',
            'url' => 'https://www.youtube.com/embed/AVXmfnJ2mMk?autoplay=1'
        ]);

        DB::table('videos')->insert([
            'image' => 'review6.jpg',
            'url' => 'https://www.youtube.com/embed/yFSAI2pVQiw?autoplay=1'
        ]);

        DB::table('videos')->insert([
            'image' => 'review7.jpg',
            'url' => 'https://www.youtube.com/embed/85XpTbpCqBs?autoplay=1'
        ]);

        DB::table('videos')->insert([
            'image' => 'review8.jpg',
            'url' => 'https://www.youtube.com/embed/8znWlmOxs3Q?autoplay=1'
        ]);

        DB::table('videos')->insert([
            'image' => 'review9.jpg',
            'url' => 'https://www.youtube.com/embed/lEW0Iz9AAOs?autoplay=1'
        ]);

        DB::table('videos')->insert([
            'image' => 'review10.jpg',
            'url' => 'https://www.youtube.com/embed/eFmj2PABG28?autoplay=1'
        ]);
    }
}
