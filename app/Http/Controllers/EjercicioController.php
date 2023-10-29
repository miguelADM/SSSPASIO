<?php

namespace App\Http\Controllers;

use App\Models\Ejercicios;
use Illuminate\Http\Request;

class EjercicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $ejercicios = Ejercicios::where('id_clasificacion', $id)->get();
            return view('components.ejercicios.inicio_ejercicio', compact('ejercicios','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
            return view('components.ejercicios.agregar_ejercicio', compact('id'));   
    }


    public function store(Request $request, $id)
    {
 
        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('image_ejercicios', 'public');
        } else {
            $imagenPath = null;
        }
    
        // Crear un nuevo registro de ejercicio
        $nuevoEjercicio = new Ejercicios;
        $nuevoEjercicio->nombre = $request->input('nombre');
        $nuevoEjercicio->descripcion = $request->input('descripcion');
        $nuevoEjercicio->objetivo = $request->input('objetivo');
        $nuevoEjercicio->id_clasificacion = $id;
        $nuevoEjercicio->imagen = $imagenPath; // Asignar la ruta de la imagen
    
        $nuevoEjercicio->save();
    
        // Redireccionar a la página de inicio de ejercicios o a donde desees
        return redirect()->route('ejercicios.index', $id)->with('success', 'Ejercicio agregado con éxito');
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
