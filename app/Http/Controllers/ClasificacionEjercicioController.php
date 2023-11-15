<?php

namespace App\Http\Controllers;

use App\Models\ClasificacionEjercicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClasificacionEjercicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clasifica_ejercicios = DB::table('clasificacion_ejercicios')->orderBy('nombre','asc')->paginate(10);
        return view('admin.classification', compact('clasifica_ejercicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classification.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=> 'required|unique:clasificacion_ejercicios',
            'descripcion'=> ['required'],
        ]);

        $clasifica_ejercicios = new ClasificacionEjercicio();
        $clasifica_ejercicios->nombre = $request->post('nombre');
        $clasifica_ejercicios->descripcion = $request->post('descripcion');
        $clasifica_ejercicios->save();

        return redirect()->route('classification.index')->with('Agregado','Clasificacion de Ejercicio agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clasifica_ejercicios = ClasificacionEjercicio::find($id);
        return view('admin.classification',compact('clasifica_ejercicios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clasifica_ejercicios = ClasificacionEjercicio::find($id);
        return view('admin.classification',compact('clasifica_ejercicios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clasifica_ejercicio = ClasificacionEjercicio::find($id);
        $clasifica_ejercicio->nombre = $request->post('nombre');
        $clasifica_ejercicio->descripcion = $request->post('descripcion');
        $clasifica_ejercicio->save();

        return redirect()->route('classification.index')->with('Editado','Clasificacion actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clasifica_ejercicio = ClasificacionEjercicio::find($id);
        $clasifica_ejercicio->delete();
        return redirect()->route('classification.index')->with('Eliminado','Clasificacion de Ejercico eliminado');
    }
}