<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; //HAY QUE PONER SIEMPRE
use App\Models\Estudiante;  //Siempre se pone y se debe importar donde se vaya a utilizar el modelo
use App\Models\Ciudad;  //Siempre se pone y se debe importar donde se vaya a utilizar el modelo

use Illuminate\Http\Request;

class Estudiantes extends Controller
{
    public function index(){
        $estudiante = DB::table('estudiantes')->get();
        return view('estudiantes.listado',['estudiante_vista'=>$estudiante]);
    }

    public function form_registro(){
        return view('estudiantes.form_registro');
    }

    public function registrar(Request $r){
        $estudiante = new Estudiante();
        $estudiante ->codEstudiante = $r ->input('codEstudiante');
        $estudiante ->nomEstudiante = $r ->input('nomEstudiante');
        $estudiante ->edadEstudiante = $r ->input('edadEstudiante');
        $estudiante ->fechaEstudiante = $r ->input('fechaEstudiante');
        $estudiante ->sexEstudiante = $r ->input('sexEstudiante');
        $estudiante ->ciudad = $r ->input('ciudad');
        $estudiante ->barrio = $r ->input('barrio');
        $estudiante ->programa = $r ->input('programa');
        $estudiante ->save();
        return redirect()->route('listadoEst');
    }

    public function eliminar($id){
        $estudiante = Estudiante::findOrFail($id);
        $estudiante ->delete();
        return redirect()->route('listadoEst');
    }
    
}
