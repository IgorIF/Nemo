<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicalCertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medical_certificates')->insert([
            'text' => 'справка от педиатра об отсутствии противопоказаний (действительна 6 месяцев)'
        ]);

        DB::table('medical_certificates')->insert([
            'text' => 'результат соскоба на энтеробиоз (действительна – 3 месяца)'
        ]);

        DB::table('medical_certificates')->insert([
            'text' => 'результат анализа на яйца глист (действительна 3 месяца)'
        ]);
    }
}
