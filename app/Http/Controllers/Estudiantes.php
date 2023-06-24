<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; //HAY QUE PONER SIEMPRE
use App\Models\Estudiante;  //Siempre se pone y se debe importar donde se vaya a utilizar el modelo

use Illuminate\Http\Request;

class Estudiantes extends Controller
{
    public function index(){
        $estudiante = DB::table('estudiantes')->get;
        return view('estudiantes.listado',['estudiante_vista'=>$estudiante]);
    }
}
