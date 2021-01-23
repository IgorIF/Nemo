<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rule_items')->insert([
            'rule_category_id' => 1,
            'text' => 'Согласуйте время посещения заранее.'
        ]);
    }
}
