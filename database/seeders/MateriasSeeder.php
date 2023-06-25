<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB; //esto siempre debe ir
use Illuminate\support\Facades\Hash; //esto siempre debe ir
use Illuminate\support\str; //esto siempre debe ir

class MateriasSeeder extends Seeder
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
                'codMateria' => '10',
                'nomMateria' => 'Programación I',
                'cremateria' => '6'
            ],
            [
                'codMateria' => '20',
                'nomMateria' => 'Programación II',
                'cremateria' => '6'
                
            ],
            [
                'codMateria' => '30',
                'nomMateria' => 'Programación III',
                'cremateria' => '6'
                
            ],
            [
                'codMateria' => '40',
                'nomMateria' => 'Estructuras de datos',
                'cremateria' => '6'
                
            ],
            [
                'codMateria' => '50',
                'nomMateria' => 'Fisica I',
                'cremateria' => '4'
                
            ]
            ];

            DB::table('materias')->insert($datos);
    }
}
