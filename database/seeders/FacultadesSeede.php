<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultadesSeede extends Seeder
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
    }
}
