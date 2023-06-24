<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //HAY QUE PONER SIEMPRE
use App\Models\Facultad;  //Siempre se pone y se debe importar donde se vaya a utilizar el modelo

class Facultades extends Controller
{
    public function index(){
        $facultades = DB::table('facultades')->get(); //obtenemos de la tabla facultades, se debe enviar a la vista
        return view('facultades.listado',['facultades'=>$facultades]);
    }
    public function form_registro(){
        return view('facultades.form_registro');
    }
    
    public function registrar(Request $r){
        $facultad = new Facultad();
        $facultad->codFacultad = $r->input('codFacultad'); //en el input se pone el nombre que se puso en name
        $facultad->nomFacultad = $r->input('nomFacultad');
        $facultad->save();
        return redirect()->route('listadoFac'); //listadoFac es el nombre abreviado del controlador        
    }

    public function eliminar($id){
        $facultad = Facultad::findOrFail($id); //encuentre el registro cuyo id corresponda al que yo le di aqui
        $facultad->delete();
        return redirect()->route('listadoFac');
    }

    public function form_actualiza($id){
        $facultad = Facultad::findOrFail($id);
        return view('facultades.form_actualiza', compact('facultad'));
    }

    public function actualizar(Request $r, $id){
        $facultad = Facultad::findOrFail($id);
        $facultad->codFacultad = $r->input('codFacultad'); //en el input se pone el nombre que se puso en name
        $facultad->nomFacultad = $r->input('nomFacultad');
        $facultad->save();
        return redirect()->route('listadoFac'); 

    }
}
