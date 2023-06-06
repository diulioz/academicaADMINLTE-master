<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB; //esto siempre debe ir
use Illuminate\support\Facades\Hash; //esto siempre debe ir
use Illuminate\support\str; //esto siempre debe ir

class FacultadesSeeder extends Seeder
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
                'codFacultad' => '10',
                'nomFacultad' => 'Artes'
            ],
            [
                'codFacultad' => '20',
                'nomFacultad' => 'Ingenieria'
            ],
            [
                'codFacultad' => '30',
                'nomFacultad' => 'Idiomas'
            ],
            [
                'codFacultad' => '40',
                'nomFacultad' => 'Ciencias'
            ],
            [
                'codFacultad' => '50',
                'nomFacultad' => 'Licenciaturas'
            ]
            ];

            DB::table('facultades')->insert($datos);
    }
}
