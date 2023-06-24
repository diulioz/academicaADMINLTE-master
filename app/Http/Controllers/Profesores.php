<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; //HAY QUE PONER SIEMPRE
use App\Models\Profesor;  //Siempre se pone y se debe importar donde se vaya a utilizar el modelo

use Illuminate\Http\Request;

class Profesores extends Controller
{
    public function index(){
        $docente = DB::table('profesores')->get();
        return view('profesores.listado',['docente_vista'=>$docente]);
    }

    public function form_registro(){
        return view('profesores.form_registro');
    }

    public function registrar(Request $r){
        $docente = new Profesor();
        $docente ->codProfesor = $r->input('codProfesor');
        $docente ->nomProfesor = $r->input('nomProfesor');
        $docente ->catProfesor = $r->input('catProfesor');
        $docente ->save();
        return redirect()->route('listadoProf');
    }

    public function eliminar($id){
        $docente = Profesor::findOrFail($id);
        $docente ->delete();
        return redirect()->route('listadoProf');
    }
}
