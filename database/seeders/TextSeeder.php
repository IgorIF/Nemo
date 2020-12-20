<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('texts')->insert([
            'id' => '1',
            'text' => 'Плавать раньше, чем ходить!'
        ]);

        DB::table('texts')->insert([
            'id' => '2',
            'text' => 'Индивидуальные занятия плаванием для детей от 1,5 месяцев до 7 лет в Люберцах, Чертаново, Марьино и Академическом районах'
        ]);

        DB::table('texts')->insert([
            'id' => '3',
            'text' => 'Cкидка -30% на первое занятие'
        ]);

        DB::table('texts')->insert([
            'id' => '4',
            'text' => '+7(977)680-02-61'
        ]);

        DB::table('texts')->insert([
            'id' => '5',
            'text' => '+7(977)680-02-62'
        ]);

        DB::table('texts')->insert([
            'id' => '6',
            'text' => '+7(977)680-02-63'
        ]);

        DB::table('texts')->insert([
            'id' => '7',
            'text' => '+7(977)680-02-66'
        ]);

        DB::table('texts')->insert([
            'id' => '8',
            'text' => 'О нас'
        ]);

        DB::table('texts')->insert([
            'id' => '9',
            'text' => 'Детский акваклуб «Немо» проводит индивидуальные занятия плаванием с детьми&nbsp;<span>от 1.5 месяцев до 7 лет</span>.&nbsp;Занятия проходят в игровой динамике&nbsp;с учетом возраста ребёнка, состояния его здоровья, психологических особенностей и умения держаться на воде.'
        ]);

        DB::table('texts')->insert([
            'id' => '10',
            'text' => ''
        ]);
    }
}
