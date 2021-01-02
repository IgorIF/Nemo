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
            'text' => 'Бассейн',
            'icon' => 'security-icon1-active',
            'icon_width' => 78
        ]);

        DB::table('security_categories')->insert([
            'id' => 2,
            'text' => 'Водоподготовка',
            'icon' => 'security-icon2',
            'icon_width' => 59
        ]);

        DB::table('security_categories')->insert([
            'id' => 3,
            'text' => 'Удобства',
            'icon' => 'security-icon3',
            'icon_width' => 51
        ]);
    }
}
