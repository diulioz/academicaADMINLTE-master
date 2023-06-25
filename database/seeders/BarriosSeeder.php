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
            ],
            [
                'codBarrio'=>'11',
                'nomBarrio'=>'Lorenzo',
                'estBarrio'=>'3',
                'comuna'=>'2',
            ],
            [
                'codBarrio'=>'12',
                'nomBarrio'=>'Palermo',
                'estBarrio'=>'5',
                'comuna'=>'8',
            ],
            [
                'codBarrio'=>'13',
                'nomBarrio'=>'Mercedario',
                'estBarrio'=>'3',
                'comuna'=>'2',
            ],
            [
                'codBarrio'=>'14',
                'nomBarrio'=>'Cuadras',
                'estBarrio'=>'5',
                'comuna'=>'8',
            ]

        ];
        DB::table('barrios')->insert($datos);
    }
}
