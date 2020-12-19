<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('header_data')->insert([
            'name' => 'text_1',
            'text' => 'Плавать раньше, чем ходить!'
        ]);

        DB::table('header_data')->insert([
            'name' => 'text_2',
            'text' => 'Индивидуальные занятия плаванием для детей от 1,5 месяцев до 7 лет в Люберцах, Чертаново, Марьино и Академическом районах'
        ]);
    }
}
