<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB; //esto siempre debe ir
use Illuminate\support\Facades\Hash; //esto siempre debe ir
use Illuminate\support\str; //esto siempre debe ir

class DepartamentosSeeder extends Seeder
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
                'codDepto'=>'11',
                'nomDepto'=>'Nariño',
            ],
            [
                'codDepto'=>'12',
                'nomDepto'=>'Cauca',
            ],
            [
                'codDepto'=>'13',
                'nomDepto'=>'Caldas',
            ],
            [
                'codDepto'=>'14',
                'nomDepto'=>'Putumayo',
            ],
            [
                'codDepto'=>'15',
                'nomDepto'=>'Meta',
            ],

        ];
        DB::table('departamentos')->insert($datos);
    }
}
