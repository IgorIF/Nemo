<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TextSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('texts')->insert([
            'id' => 69,
            'text' => 'ПРОЦЕСС ОПЛАТЫ ПО КАРТАМ'
        ]);

        DB::table('texts')->insert([
            'id' => 70,
            'text' => 'ПРОЦЕСС ОПЛАТЫ ПО КАРТАМ описание'
        ]);
    }
}
