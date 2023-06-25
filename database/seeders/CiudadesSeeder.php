<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB; //esto siempre debe ir
use Illuminate\support\Facades\Hash; //esto siempre debe ir
use Illuminate\support\str; //esto siempre debe ir

class CiudadesSeeder extends Seeder
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
                'codCiudad'=>'10001',
                'nomCiudad'=>'Pasto',
                'departamento'=>'10',
            ],
            [
                'codCiudad'=>'10002',
                'nomCiudad'=>'Ipiales',
                'departamento'=>'10',
            ],
            [
                'codCiudad'=>'10003',
                'nomCiudad'=>'Tuquerres',
                'departamento'=>'10',
            ],
            [
                'codCiudad'=>'10004',
                'nomCiudad'=>'Tumaco',
                'departamento'=>'10',
            ],
            [
                'codCiudad'=>'10005',
                'nomCiudad'=>'Nariño',
                'departamento'=>'10',
            ]

        ];
        DB::table('ciudades')->insert($datos);
    }
}
