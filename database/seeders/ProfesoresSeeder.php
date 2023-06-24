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
                'codProfesor'=>'10',
                'nomProfesor'=>'Dario Lopez',
                'catProfesor'=>'Magister',
            ]

        ];
        DB::table('profesores')->insert($datos);
    }
}
