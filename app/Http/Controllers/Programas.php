<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //HAY QUE PONER SIEMPRE
use App\Models\Programa;  //Siempre se pone y se debe importar donde se vaya a utilizar el modelo

class Programas extends Controller
{
    public function index(){
        $programas_v = DB::table('programas')->get(); //obtenemos de la tabla programas todos los registros
        return view('programas.listado',['programas_vista'=>$programas_v]); //El arreglo se manda a la vista se debe enviar a la vista
    }
}
