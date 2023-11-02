<?php

namespace App\Http\Controllers;

use App\Models\GrupoTrabajo;
use Illuminate\Http\Request;

class GruposController extends Controller
{
 
    public function index()
    {
        $grupos_trabajo = GrupoTrabajo::all();
        return view('admin.working-groups', compact('grupos_trabajo'));
    }


    public function create()
    {
        return view('working-groups.create');
    }

    public function store(Request $request)
    {
        $grupo = new GrupoTrabajo();
        $grupo->nombre = $request->post('nombre');
        $grupo->descripcion = $request->post('descripcion');
        $grupo->save();

        return redirect()->back();

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

        return redirect()->route('working-groups.index');
    }


    public function destroy($id)
    {
        $grupo = GrupoTrabajo::find($id);
        $grupo->delete();
        return redirect()->route('working-groups.index');
    }
}
