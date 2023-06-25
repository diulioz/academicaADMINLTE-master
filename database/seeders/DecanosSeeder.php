<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB; //esto siempre debe ir
use Illuminate\support\Facades\Hash; //esto siempre debe ir
use Illuminate\support\str; //esto siempre debe ir

class DecanosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'codDecano' => '10',
                'nomDecano' => 'Miguel Robles',
                'facultad' => '10'
            ],
            [
                'codDecano' => '20',
                'nomDecano' => 'Alexander Barón',
                'facultad' => '20'
                
            ],
            [
                'codDecano' => '30',
                'nomDecano' => 'Paola Arturo',
                'facultad' => '30'
                
            ],
            [
                'codDecano' => '40',
                'nomDecano' => 'Natalia Ponce',
                'facultad' => '40'
                
            ],
            [
                'codDecano' => '50',
                'nomDecano' => 'Julian Aguirre',
                'facultad' => '50'
                
            ]
            ];

            DB::table('decanos')->insert($datos);
    }
}
