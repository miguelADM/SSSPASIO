<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Enfermedades;

class enfermedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enfermedad = Enfermedades::all();
        return view('admin.diseases', compact('enfermedad'));
    }


    public function create()
    {
        return view('diseases.create');
    }


    public function store(Request $request)
    {
        $enfermedad = new Enfermedades();
        $enfermedad->nombre = $request->post('nombre');
        $enfermedad->descripcion = $request->post('descripcion');
        $enfermedad -> save();

        return redirect()->back();
    }


    public function show($id)
    {
        
        $enfermedad = Enfermedades::find($id);
        $enfermedad->delete();
        return redirect()->route('diseases.index')->with('success','Eliminado con exito con exito!');
    }


    public function edit($id)
    {
        $enfermedad = Enfermedades::find($id);
        return view('admin.diseases',compact('enfermedad'));
    }


    public function update(Request $request, $id)
    {
        $enfermedad = Enfermedades::find($id);
        $enfermedad->nombre = $request->post('nombre');
        $enfermedad->descripcion = $request->post('descripcion');
        $enfermedad->save();

        return redirect()->route('diseases.index')->with('success','Actualizada con exito con exito!');
    }


    public function destroy($id)
    {
        $enfermedad = Enfermedades::find($id);
        $enfermedad->delete();
        return redirect()->route('diseases.index');
    }
}
