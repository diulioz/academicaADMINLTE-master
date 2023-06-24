<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; //HAY QUE PONER SIEMPRE
use App\Models\Profesor;  //Siempre se pone y se debe importar donde se vaya a utilizar el modelo

use Illuminate\Http\Request;

class Profesores extends Controller
{
    public function index(){
        return view('profesores.listado');
    }
}
