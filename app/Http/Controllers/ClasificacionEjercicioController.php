<?php

namespace App\Http\Controllers;

use App\Models\ClasificacionEjercicio;
use Illuminate\Http\Request;

class ClasificacionEjercicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clasifica_ejercicios = ClasificacionEjercicio::all();
        return view('components.clasificacion_ejercicios.inicio_clasifica_ejercicio', compact('clasifica_ejercicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('components.clasificacion_ejercicios.agregar_clasifica_ejercicio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clasifica_ejercicios = new ClasificacionEjercicio();
        $clasifica_ejercicios->nombre = $request->post('nombre');
        $clasifica_ejercicios->descripcion = $request->post('descripcion');
        $clasifica_ejercicios->save();
        
        return redirect()->route('clasificacion_ejercicios.index')->with('success','Agregado con exito!');
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
        return view('components.clasificacion_ejercicios.eliminar_clasifica_ejercicio',compact('clasifica_ejercicios'));
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
        return view('components.clasificacion_ejercicios.actualizar_clasifica_ejercicio',compact('clasifica_ejercicios'));
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

        return redirect()->route('clasificacion_ejercicios.index')->with('success','Actualizado con exito con exito!');
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
        return redirect()->route('clasificacion_ejercicios.index')->with('success','Eliminado con exito con exito!');
    }
}
