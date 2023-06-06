<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //HAY QUE PONER SIEMPRE

class Facultades extends Controller
{
    public function index(){
        $facultades = DB::table('facultades')->get(); //obtenemos de la tabla facultades, se debe enviar a la vista
        return view('facultades.listado',['facultades'=>$facultades]);
    }
    public function form_registro(){
        return view('facultades.form_registro');
    }
}
