<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB; //esto siempre debe ir
use Illuminate\support\Facades\Hash; //esto siempre debe ir
use Illuminate\support\str; //esto siempre debe ir

class RegnotasSeeder extends Seeder
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
                'estudiante' => '3608',
                'materia' => '10',
                'profesor' => '14',
                'parcial1' => '5',
                'parcial2' => '5',
                'eFinal' => '5.0',
                'nFinal' => '5',
                'estado' => 'A'
            ],
            [
                'estudiante' => '3609',
                'materia' => '10',
                'profesor' => '14',
                'parcial1' => '3',
                'parcial2' => '3',
                'eFinal' => '3',
                'nFinal' => '3',
                'estado' => 'A'
            ],
            [
                'estudiante' => '3610',
                'materia' => '10',
                'profesor' => '14',
                'parcial1' => '4',
                'parcial2' => '4',
                'eFinal' => '4',
                'nFinal' => '4',
                'estado' => 'A'
            ],
            [
                'estudiante' => '3611',
                'materia' => '50',
                'profesor' => '15',
                'parcial1' => '2',
                'parcial2' => '2',
                'eFinal' => '2',
                'nFinal' => '2',
                'estado' => 'R'
            ],
            [
                'estudiante' => '3612',
                'materia' => '50',
                'profesor' => '15',
                'parcial1' => '1',
                'parcial2' => '1',
                'eFinal' => '1',
                'nFinal' => '1',
                'estado' => 'R'
            ]
            
            ];

            DB::table('regnotas')->insert($datos);
    }
}
