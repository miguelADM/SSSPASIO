<?php

namespace App\Http\Controllers;

use App\Models\ClasificacionEjercicio;
use App\Models\Ejercicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EjercicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clasi = ClasificacionEjercicio::all();
        $ejercicios = DB::table(function ($subquery) {
            $subquery->select(
                'ejercicios.id as id',
                'ejercicios.nombre as nombre',
                'ejercicios.descripcion as descripcion',
                'ejercicios.objetivo as objetivo',                
                DB::raw('GROUP_CONCAT(DISTINCT clasificacion_ejercicios.nombre) as clasificacion_nombre'),  
                DB::raw('GROUP_CONCAT(DISTINCT clasificacion_ejercicios.id) as id_clasificacion'), 
                
            )
            ->from('ejercicios')
            ->join('clasificacion_ejercicios', 'clasificacion_ejercicios.id', '=', 'ejercicios.id_clasificacion')
            ->groupBy('id', 'nombre', 'descripcion', 'objetivo')
            ->orderBy('nombre', 'ASC');
        }, 'subquery')
        ->paginate(10);
            return view('admin.exercises', compact('ejercicios','clasi'));
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


    public function store(Request $request)
    {
        $request->validate([
            'descripcion'=> 'required',
            'objetivo'=> 'required',
            'clasificacion'=> 'required',
            'nombre'=> 'required|unique:ejercicios',
        ]);
 
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
        $nuevoEjercicio->imagen = $imagenPath; // Asignar la ruta de la imagen
        $nuevoEjercicio->id_clasificacion = $request->input('clasificacion');
    
        $nuevoEjercicio->save();
    
        // Redireccionar a la página de inicio de ejercicios o a donde desees
        return redirect()->route('exercises.index')->with('success', 'Ejercicio agregado con éxito');
           
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
        $ejercicios = Ejercicios::find($id);
        $ejercicios->delete();
        return redirect()->route('exercises.index')->with('Eliminado','Ejercicio eliminado');
    }
}
