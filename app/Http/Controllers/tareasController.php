<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarea;

class tareasController extends Controller
{

    public function listarTareas() {
        $tareas=tarea::get();
        return View('listarTareas', compact('tareas'));
    }

    public function registrarTareas() {
        $tareas=tarea::get();
        return View('registrarTarea', compact('tareas'));
    }    

    public function guardarTareas(Request $datos){
    	$tareas= new tarea();
    	$tareas->fecha=$datos->input('fecha_hora');
    	$tareas->descripcion=$datos->input('descripcion');
        $tareas->fecha_terminacion=$datos->input('fecha_terminacion');        
        $tareas->estatus=$datos->input('estatus');
    	$tareas->save();

    	return Redirect('/tareas');
    }

    public function editarTareas($id){
        $tareas=tarea::find($id);
        return view('editarTarea', compact('tareas'));
    }    

    public function actualizarTareas(Request $datos, $id){        
        $tareas=tarea::find($id);
        $tareas->fecha=$datos->input('fecha');        
        $tareas->descripcion=$datos->input('descripcion');
        $tareas->fecha_terminacion=$datos->input('fecha_terminacion');        
        $tareas->estatus=$datos->input('estatus');
        $tareas->save();

        return Redirect('/tareas');
    }

    public function eliminarTareas($id) {
        $tareas=tarea::find($id);
        $tareas->delete();

        return Redirect('/tareas');
    }    

}
