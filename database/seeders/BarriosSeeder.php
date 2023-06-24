<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB; //esto siempre debe ir
use Illuminate\support\Facades\Hash; //esto siempre debe ir
use Illuminate\support\str; //esto siempre debe ir

class BarriosSeeder extends Seeder
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
                'codBarrio'=>'10',
                'nomBarrio'=>'Pandiaco',
                'estBarrio'=>'3',
                'comuna'=>'3',
            ]

        ];
        DB::table('barrios')->insert($datos);
    }
}
