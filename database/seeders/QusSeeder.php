<?php

namespace Database\Seeders;

use App\Models\Qus;
use Illuminate\Database\Seeder;

class QusSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $quses = [
            [
                'qus'     => 'Which one is the NDMA free Losartan preparation of SQUARE?',
                'ans_1'   => 'Rosuva',
                'ans_2'   => 'Angilock',
                'ans_3'   => 'Anzitor',
                'ans'     => 2,
                'ans_img' => '01.png'
            ],
            [
                'qus'     => 'Which one is the Amlodipine & Telmisartan preparation (with Bi-layer technology) of SQUARE?',
                'ans_1'   => 'Camlotel',
                'ans_2'   => 'Telmilok Plus',
                'ans_3'   => 'Telmilok',
                'ans'     => 1,
                'ans_img' => '02.png'
            ],
            [
                'qus'     => 'Which one is the COS grade Amlodipine & Olmesartan preparation of SQUARE?',
                'ans_1'   => 'Camlodin',
                'ans_2'   => 'Olmecar',
                'ans_3'   => 'Camlosart',
                'ans'     => 3,
                'ans_img' => '03.png'
            ],
            [
                'qus'     => 'Which one is the Ciprofibrate (Powerful TG reducer) preparation of SQUARE?',
                'ans_1'   => 'Minibet',
                'ans_2'   => 'Anzitor',
                'ans_3'   => 'Lipired',
                'ans'     => 1,
                'ans_img' => '05.png'
            ],
            [
                'qus'     => 'Which one is the USDMF Rosuvastatin preparation of SQUARE?',
                'ans_1'   => 'Rosuva',
                'ans_2'   => 'Anzitor',
                'ans_3'   => 'Angilock',
                'ans'     => 1,
                'ans_img' => '04.png'
            ],
            [
                'qus'     => 'Which one is the COS grade Atorvastatin preparation of SQUARE?',
                'ans_1'   => 'Olmecar',
                'ans_2'   => 'Anzitor',
                'ans_3'   => 'Angilock',
                'ans'     => 2,
                'ans_img' => '06.png'
            ],
            [
                'qus'     => 'Which one is the Nebivolol preparation of SQUARE?',
                'ans_1'   => 'Bisocor',
                'ans_2'   => 'Nebita',
                'ans_3'   => 'Telmilok',
                'ans'     => 2,
                'ans_img' => '07.png'
            ],
            [
                'qus'     => 'Which one is the Clopidogrel preparation of SQUARE?',
                'ans_1'   => 'Anclog',
                'ans_2'   => 'Ivanor',
                'ans_3'   => 'Ticalog',
                'ans'     => 1,
                'ans_img' => '08.png'
            ]
        ];

        foreach ( $quses as $qus ) {
            Qus::create( $qus );
        }
    }
}
