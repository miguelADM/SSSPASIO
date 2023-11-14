<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Enfermedades;
use Illuminate\Support\Facades\DB;

class enfermedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enfermedad = DB::table('enfermedades')->orderBy('nombre','asc')->paginate(10);
        return view('admin.diseases', compact('enfermedad'));
    }


    public function create()
    {
        return view('diseases.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|unique:enfermedades',
            'descripcion'=>'required'
        ]);

        $enfermedad = new Enfermedades();
        $enfermedad->nombre = $request->post('nombre');
        $enfermedad->descripcion = $request->post('descripcion');
        $enfermedad -> save();

        return redirect()->route('diseases.index')->with('Agregado','Enfermedad Agregado');
    }


    public function show($id)
    {
        
        $enfermedad = Enfermedades::find($id);
        $enfermedad->delete();
        return redirect()->route('diseases.index');
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

        return redirect()->route('diseases.index')->with('Editado','Enfermedad eliminado');
    }


    public function destroy($id)
    {
        $enfermedad = Enfermedades::find($id);
        $enfermedad->delete();
        return redirect()->route('diseases.index')->with('Eliminado','Efermedad eliminada');
    }
}
