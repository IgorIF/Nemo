<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilialBranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filial_branches')->insert([
            'id' => 1,
            'address' => 'ул. Кировоградская 36',
            'phone' => '+7(977)680-02-61',
            'metro' => 'Пражская'
        ]);

        DB::table('filial_branches')->insert([
            'id' => 2,
            'address' => 'ул. Винокурова 24, к4',
            'phone' => '+7(977)680-02-62',
            'metro' => 'Академическая'
        ]);

        DB::table('filial_branches')->insert([
            'id' => 3,
            'address' => 'Мячковский бульвар 16, к1',
            'phone' => '+7(977)680-02-63',
            'metro' => 'Марьино'
        ]);

        DB::table('filial_branches')->insert([
            'id' => 4,
            'address' => 'г.Люберцы, ул. Камова 11/5',
            'phone' => '+7(977)680-02-66',
            'metro' => 'Некрасовка'
        ]);

        DB::table('filial_branches')->insert([
            'id' => 5,
            'address' => 'ул. Петрозаводская 11, к2 (скоро открытие)',
            'phone' => '+7(977)680-02-77',
            'metro' => 'Речной вокзал'
        ]);
    }
}
