<?php

namespace App\Http\Controllers;

use App\Models\GrupoTrabajo;
use Illuminate\Http\Request;

class GruposController extends Controller
{
 
    public function index()
    {
        $grupos_trabajo = GrupoTrabajo::all();
        return view('components.grupos.inicio_grupo', compact('grupos_trabajo'));
    }


    public function create()
    {
        return view('components.grupos.agregar_grupo');
    }


    public function store(Request $request)
    {
        $grupo = new GrupoTrabajo();
        $grupo->nombre = $request->post('nombre');
        $grupo->descripcion = $request->post('descripcion');
        $grupo->save();

        return redirect()->route('grupos.index')->with('success','Agregado con exito!');

    }


    public function show($id)
    {
        $grupo = GrupoTrabajo::find($id);
        return view('components.grupos.eliminar_grupo',compact('grupo'));
    }


    public function edit($id)
    {
        $grupo = GrupoTrabajo::find($id);
        return view('components.grupos.actualizar_grupo',compact('grupo'));
    }


    public function update(Request $request,  $id)
    {
        $grupo = GrupoTrabajo::find($id);
        $grupo->nombre = $request->post('nombre');
        $grupo->descripcion = $request->post('descripcion');
        $grupo->save();

        return redirect()->route('grupos.index')->with('success','Actualizado con exito con exito!');
    }


    public function destroy( $id)
    {
        $grupo = GrupoTrabajo::find($id);
        $grupo->delete();
        return redirect()->route('grupos.index')->with('success','Eliminado con exito con exito!');
    }
}
