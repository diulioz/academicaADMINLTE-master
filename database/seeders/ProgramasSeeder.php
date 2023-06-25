<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB; //esto siempre debe ir
use Illuminate\support\Facades\Hash; //esto siempre debe ir
use Illuminate\support\str; //esto siempre debe ir

class ProgramasSeeder extends Seeder
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
                'codPrograma' => '20',
                'nomPrograma' => 'Ingeniería de Sistemas',
                'facultad' => '20'
            ],
            [
                'codPrograma' => '21',
                'nomPrograma' => 'Ingeniería de Electrónica',
                'facultad' => '20'
            ],
            [
                'codPrograma' => '22',
                'nomPrograma' => 'Ingeniería Civil',
                'facultad' => '20'
            ],
            [
                'codPrograma' => '23',
                'nomPrograma' => 'Ingeniería Industrial',
                'facultad' => '20'
            ],
            [
                'codPrograma' => '24',
                'nomPrograma' => 'Ingeniería Mecánica',
                'facultad' => '20'
            ],
        ];
        DB::table('programas')->insert($datos);
    }
}
