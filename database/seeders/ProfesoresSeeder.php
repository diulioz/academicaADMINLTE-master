<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB; //esto siempre debe ir
use Illuminate\support\Facades\Hash; //esto siempre debe ir
use Illuminate\support\str; //esto siempre debe ir

class ProfesoresSeeder extends Seeder
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
                'codProfesor'=>'13',
                'nomProfesor'=>'Dario Lopez',
                'catProfesor'=>'Magister',
            ],
            [
                'codProfesor'=>'14',
                'nomProfesor'=>'Camila Lopez',
                'catProfesor'=>'Magister',
            ],
            [
                'codProfesor'=>'15',
                'nomProfesor'=>'Diana Lopez',
                'catProfesor'=>'Magister',
            ],
            [
                'codProfesor'=>'16',
                'nomProfesor'=>'Andres Lopez',
                'catProfesor'=>'Magister',
            ],
            [
                'codProfesor'=>'17',
                'nomProfesor'=>'Camilo Lopez',
                'catProfesor'=>'Magister',
            ]

        ];
        DB::table('profesores')->insert($datos);
    }
}
