<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalculatorDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calculator_descriptions')->insert([
            'form_name' => 'quantity',
            'field_name' => 'trial',
            'title' => 'Пробное занятие',
            'body' => 'предусмотрено для всех новых посетителей нашего акваклуба. Длительность занятия составляет: 30 минут. Проходит индивидуально с тренером.'
        ]);

        DB::table('calculator_descriptions')->insert([
            'form_name' => 'quantity',
            'field_name' => 'oneoff',
            'title' => 'Разовое занятие',
            'body' => 'предусмотрено для тех, кто уже посещал занятия. Отмена и перенос занятия до 18:00 предыдущего дня. Уведомление о смене тренера не предусмотрено'
        ]);

        DB::table('calculator_descriptions')->insert([
            'form_name' => 'quantity',
            'field_name' => '4',
            'title' => 'Абонемент на 4 занятия',
            'body' => 'предусматривает 1 занятие в неделю.'
        ]);

        DB::table('calculator_descriptions')->insert([
            'form_name' => 'quantity',
            'field_name' => '8',
            'title' => 'Абонемент на 8 занятий',
            'body' => 'предусматривает 2 занятия в неделю.'
        ]);

        DB::table('calculator_descriptions')->insert([
            'form_name' => 'quantity',
            'field_name' => '12',
            'title' => 'Абонемент на 12 занятий',
            'body' => 'предусматривает 3 занятия в неделю.'
        ]);

        DB::table('calculator_descriptions')->insert([
            'form_name' => 'swimming_pool',
            'field_name' => 'small_pool',
            'title' => 'Маленький бассейн',
            'body' => 'предназначен для индивидуальных занятий. Представляет собой круглый каркасный бассейн, диаметром - 3м, глубиной - 1,2м.'
        ]);

        DB::table('calculator_descriptions')->insert([
            'form_name' => 'swimming_pool',
            'field_name' => 'large_pool',
            'title' => 'Большой бассейн',
            'body' => 'предназначен для групповых и индивидуальных занятий. Представляет собой прямоугольный бассейн, размерами: длина и ширина - 6х3м, глубина - 1,2м.'
        ]);

        DB::table('calculator_descriptions')->insert([
            'form_name' => 'type_of_subscription',
            'field_name' => 'standard',
            'title' => 'Абонемент “Стандарт”',
            'body' => 'предусматривает отмену занятия до 18.00 предыдущего дня. Срок действия абонемента: 4 недели + 2 недели заморозки. Уведомление о смене тренера не предусмотрено.'
        ]);

        DB::table('calculator_descriptions')->insert([
            'form_name' => 'type_of_subscription',
            'field_name' => 'loyal',
            'title' => 'Абонемент “Лояльный”',
            'body' => 'позволяет получать уведомление о смене тренера и отменять занятие день в день без потери занятия. Срок действия абонемента: 4 недели + 2 недели заморозки.'
        ]);

    }
}
