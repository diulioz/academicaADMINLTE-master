<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //HAY QUE PONER SIEMPRE
use App\Models\Programa;  //Siempre se pone y se debe importar donde se vaya a utilizar el modelo
use App\Models\Facultad;

class Programas extends Controller
{
    public function index(){
        $programas_v = DB::table('programas')->get(); //obtenemos de la tabla programas todos los registros
        return view('programas.listado',['programas_vista'=>$programas_v]); //El arreglo se manda a la vista se debe enviar a la vista
    }

    public function form_registro(){
        $facultad = facultad::all();
        return view('programas.form_registro',compact('facultad'));
    }

    public function registrar(Request $r){
        $programa = new Programa();
        //los primeros son el nombre del atributo, los del input son en nombre que se pusieron en el name en el formulario
        $programa ->codPrograma = $r->input('codPrograma'); 
        $programa ->nomPrograma = $r->input('nomPrograma');
        $programa ->facultad = $r->input('Facultad');
        $programa->save();
        return redirect()->route('listadoProg');
    }
    public function eliminar($id){
        $programa = Programa::findOrFail($id);
        $programa->delete();
        return redirect()->route('listadoProg');
    }
}
