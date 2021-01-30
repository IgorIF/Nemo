<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vacancies')->insert([
            'text' => 'Тренер по плаванию'
        ]);

        DB::table('vacancies')->insert([
            'text' => 'Администратор'
        ]);
    }
}
