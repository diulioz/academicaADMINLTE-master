<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB; //esto siempre debe ir
use Illuminate\support\Facades\Hash; //esto siempre debe ir
use Illuminate\support\str; //esto siempre debe ir

class EstudiantesSeeder extends Seeder
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
                'codEstudiante' => '3608',
                'nomEstudiante' => 'Daniel Lopez',
                'edadEstudiante' => '23',
                'fechaEstudiante' => '2000-10-16',
                'sexEstudiante' => 'M',
                'ciudad' => '10001',
                'barrio' => '10',
                'programa' => '20',

            ],
            [
                'codEstudiante' => '3609',
                'nomEstudiante' => 'Camila Gonzales',
                'edadEstudiante' => '23',
                'fechaEstudiante' => '2000-10-16',
                'sexEstudiante' => 'F',
                'ciudad' => '10001',
                'barrio' => '10',
                'programa' => '20',

            ],
            [
                'codEstudiante' => '3610',
                'nomEstudiante' => 'Pedro Riascos',
                'edadEstudiante' => '23',
                'fechaEstudiante' => '2000-10-16',
                'sexEstudiante' => 'M',
                'ciudad' => '10001',
                'barrio' => '10',
                'programa' => '20',

            ],
            [
                'codEstudiante' => '3611',
                'nomEstudiante' => 'Camila Riascos',
                'edadEstudiante' => '23',
                'fechaEstudiante' => '2000-10-16',
                'sexEstudiante' => 'F',
                'ciudad' => '10001',
                'barrio' => '10',
                'programa' => '20',

            ],
            [
                'codEstudiante' => '3612',
                'nomEstudiante' => 'Adriana Riascos',
                'edadEstudiante' => '23',
                'fechaEstudiante' => '2000-10-16',
                'sexEstudiante' => 'F',
                'ciudad' => '10001',
                'barrio' => '10',
                'programa' => '20',

            ]

        ];
        DB::table('estudiantes')->insert($datos);
    }
}
