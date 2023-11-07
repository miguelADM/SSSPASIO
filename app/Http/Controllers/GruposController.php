<?php

namespace App\Http\Controllers;

use App\Models\GrupoTrabajo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GruposController extends Controller
{
 
    public function index()
    {
        $grupos_trabajo = DB::table('grupo_trabajos')->orderBy('nombre','asc')->paginate(10);
        return view('admin.working-groups', compact('grupos_trabajo'));
    }


    public function create()
    {
        return view('working-groups.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|unique:grupo_trabajos',
            'descripcion'=>'required'
        ]);

        $grupo = new GrupoTrabajo();
        $grupo->nombre = $request->post('nombre');
        $grupo->descripcion = $request->post('descripcion');
        $grupo->save();

        return redirect()->route('working-groups.index')->with('Agregado','Grupo de Trabajo Agregado');

    }


    public function show($id)
    {
        $grupo = GrupoTrabajo::find($id);
        return view('admin.working-groups',compact('grupo'));
    }


    public function edit($id)
    {
        $grupo = GrupoTrabajo::find($id);
        return view('admin.working-groups',compact('grupo'));
    }


    public function update(Request $request,  $id)
    {
        $grupo = GrupoTrabajo::find($id);
        $grupo->nombre = $request->post('nombre');
        $grupo->descripcion = $request->post('descripcion');
        $grupo->save();

        return redirect()->route('working-groups.index')->with('Editado','Grupo de Trabajo Editado');
    }


    public function destroy($id)
    {
        $grupo = GrupoTrabajo::find($id);
        $grupo->delete();
        return redirect()->route('working-groups.index')->with('Eliminado','Grupo de Trabajo eliminado');
    }
}
