<?php

namespace Database\Seeders;

use App\Models\Trainer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainers')->insert([
            'name' => 'Яна Кокошникова',
            'image' => '1.jpg',
            'description' => '51 год, 2 сына. Всю жизнь занимаюсь спортом. Летом люблю кататься на велосипеде. Зимой осваиваю горные лыжи. Имею I взрослый по плаванию и по гандболу. Имею: 20-ти летний опыт работы по обучению плавания детей в возрасте от 2-х лет и 3- х летний опыт работы с грудничками. Высшее образование. В 2012 году в институте восстановительной медицины прошла курс обучения грудничкового плавания и основы детского массажа. В 2018 году прошла курсы по: Watsu for newborns at home bath Watsu Sensory Introduction. Участвовала в Международной конференции в Санкт- Петербурге. Кратко о своей работе: Люблю наблюдать и участвовать в процессе, как детки получают удовольствие от занятий в воде. Приоритет-мягкий подход.',
            'video' => 'https://www.youtube.com/watch?v=V4Vha9mA1oY'
        ]);
    }
}
