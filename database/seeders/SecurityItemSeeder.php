<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SecurityItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('security_items')->insert([
            'text' => 'многоступенчатая система очистки воды в бассейне',
            'security_category_id' => 1
        ]);

        DB::table('security_items')->insert([
            'text' => 'температура воды в бассейне 32-34 градусов по Цельсию',
            'security_category_id' => 1
        ]);

        DB::table('security_items')->insert([
            'text' => 'время полного водообмена составляет 30 минут',
            'security_category_id' => 1
        ]);

        DB::table('security_items')->insert([
            'text' => 'рециркуляционный тип водообмена',
            'security_category_id' => 1
        ]);

        DB::table('security_items')->insert([
            'text' => 'кристально чистая вода',
            'security_category_id' => 1
        ]);

        DB::table('security_items')->insert([
            'text' => 'соответствие Санитарным правилам и нормативам СанПиН 2.1.2.Ц1188-03',
            'security_category_id' => 1
        ]);

        DB::table('security_items')->insert([
            'text' => 'фильтр грубой очистки воды',
            'security_category_id' => 2
        ]);

        DB::table('security_items')->insert([
            'text' => 'песочный фильтр тонкой очистки воды',
            'security_category_id' => 2
        ]);

        DB::table('security_items')->insert([
            'text' => 'электронный анализ воды корректировка до уровня 7,2 рН',
            'security_category_id' => 2
        ]);

        DB::table('security_items')->insert([
            'text' => 'дезинфекция и обеззараживания, мягкое хлорирования воды',
            'security_category_id' => 2
        ]);

        DB::table('security_items')->insert([
            'text' => 'детские игрушки',
            'security_category_id' => 3
        ]);

        DB::table('security_items')->insert([
            'text' => 'пеленальные столы',
            'security_category_id' => 3
        ]);

        DB::table('security_items')->insert([
            'text' => 'парковочные места',
            'security_category_id' => 3
        ]);

        DB::table('security_items')->insert([
            'text' => 'тамбур для колясок',
            'security_category_id' => 3
        ]);

        DB::table('security_items')->insert([
            'text' => 'раздевалка с феном',
            'security_category_id' => 3
        ]);

        DB::table('security_items')->insert([
            'text' => 'кофе брейки',
            'security_category_id' => 3
        ]);
    }
}
