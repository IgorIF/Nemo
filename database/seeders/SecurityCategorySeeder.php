<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SecurityCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('security_categories')->insert([
            'id' => 1,
            'name' => 'Бассейн',
            'icon' => 'security-icon1-active'
        ]);

        DB::table('security_categories')->insert([
            'id' => 2,
            'name' => 'Водоподготовка',
            'icon' => 'security-icon2'
        ]);

        DB::table('security_categories')->insert([
            'id' => 3,
            'name' => 'Удобства',
            'icon' => 'security-icon3'
        ]);
    }
}
