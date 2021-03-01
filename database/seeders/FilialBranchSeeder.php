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
            'alias' => 'prazhskaya',
            'address' => 'ул. Кировоградская 36',
            'phone' => '+7(977)680-02-61',
            'metro' => 'Пражская',
            'prices' => json_encode([
                'trial' => 980,
                'oneoff' => [
                    'large_pool' => 1850,
                    'small_pool' => 1500
                ],
                4 => [
                    'small_pool' => [
                        'standard' => 5600,
                        'loyal' => 6800
                    ],
                    'large_pool' => [
                        'standard' => 6800,
                        'loyal' => 8000
                    ]
                ],
                8 => [
                    'small_pool' => [
                        'standard' => 9900,
                        'loyal' => 11800
                    ],
                    'large_pool' => [
                        'standard' => 11800,
                        'loyal' => 14000
                    ]
                ],
                12 => [
                    'small_pool' => [
                        'standard' => 13500,
                        'loyal' => 16200
                    ],
                    'large_pool' => [
                        'standard' => 16200,
                        'loyal' => 19200
                    ]
                ],
            ])
        ]);

        DB::table('filial_branches')->insert([
            'id' => 2,
            'alias' => 'akademicheskaya',
            'address' => 'ул. Винокурова 24, к4',
            'phone' => '+7(977)680-02-62',
            'metro' => 'Академическая',
            'prices' => json_encode([
                'trial' => 980,
                'oneoff' => [
                    'large_pool' => 1850,
                    'small_pool' => 1500
                ],
                4 => [
                    'small_pool' => [
                        'standard' => 5600,
                        'loyal' => 6800
                    ],
                    'large_pool' => [
                        'standard' => 6800,
                        'loyal' => 8000
                    ]
                ],
                8 => [
                    'small_pool' => [
                        'standard' => 9900,
                        'loyal' => 11800
                    ],
                    'large_pool' => [
                        'standard' => 11800,
                        'loyal' => 14000
                    ]
                ],
                12 => [
                    'small_pool' => [
                        'standard' => 13500,
                        'loyal' => 16200
                    ],
                    'large_pool' => [
                        'standard' => 16200,
                        'loyal' => 19200
                    ]
                ],
            ])
        ]);

        DB::table('filial_branches')->insert([
            'id' => 3,
            'alias' => 'maryino',
            'address' => 'Мячковский бульвар 16, к1',
            'phone' => '+7(977)680-02-63',
            'metro' => 'Марьино',
            'prices' => json_encode([
                'trial' => 980,
                'oneoff' => 1500,
                4 => [
                    'standard' => 5600,
                    'loyal' => 6800
                ],
                8 => [
                    'standard' => 9900,
                    'loyal' => 11800
                ],
                12 => [
                    'standard' => 13500,
                    'loyal' => 16200
                ],
            ])
        ]);

        DB::table('filial_branches')->insert([
            'id' => 4,
            'alias' => 'nekrasovka',
            'address' => 'г.Люберцы, ул. Камова 11/5',
            'phone' => '+7(977)680-02-66',
            'metro' => 'Некрасовка',
            'prices' => json_encode([
                'trial' => 980,
                'oneoff' => 1500,
                4 => [
                    'standard' => 5600,
                    'loyal' => 6800
                ],
                8 => [
                    'standard' => 9900,
                    'loyal' => 11800
                ],
                12 => [
                    'standard' => 13500,
                    'loyal' => 16200
                ],
            ])
        ]);

        DB::table('filial_branches')->insert([
            'id' => 5,
            'alias' => 'rechnoy_vokzal',
            'address' => 'ул. Петрозаводская 11, к2 (скоро открытие)',
            'phone' => '+7(977)680-02-77',
            'metro' => 'Речной вокзал'
        ]);
    }
}
