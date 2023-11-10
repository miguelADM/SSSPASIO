<?php

namespace App\Http\Controllers;

use App\Models\ClasificacionEjercicio;
use App\Models\Ejercicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EjercicioController extends Controller
{

    public function index()
    {
        $paginado = 10; 

        $param['ejercicios'] = DB::table('ejercicios')
        ->join('clasificacion_ejercicios', 'ejercicios.id_clasificacion', '=', 'clasificacion_ejercicios.id')
        ->select('ejercicios.objetivo as objetivo_ejercicio','ejercicios.imagen as imagen','ejercicios.id as id_ejercicio', 'ejercicios.nombre as name_ejercicio', 'clasificacion_ejercicios.nombre as name_clasificacion', 'ejercicios.descripcion as descripcion_ejercicio')
        ->paginate($paginado);

        $param['clasificacion'] = ClasificacionEjercicio::all();
        
            return view('admin.exercises', $param);
    }



    public function create()
    {
            return route('exercises.create');   
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion'=> 'required',
            'objetivo'=> 'required',
            'clasificacion'=> 'required',
            'nombre'=> 'required',
        ]);
 
        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('public/assets/images/home/imgejercicios', 'public');
        } else {
            $imagenPath = 'No existe imagen';
        }
        
        // Crear un nuevo registro de ejercicio
        $nuevoEjercicio = new Ejercicios;
        $nuevoEjercicio->nombre = $request->input('nombre');
        $nuevoEjercicio->descripcion = $request->input('descripcion');
        $nuevoEjercicio->objetivo = $request->input('objetivo');
        $nuevoEjercicio->id_clasificacion = $request->input('clasificacion');
        $nuevoEjercicio->imagen = $imagenPath; // Asignar la ruta de la imagen
        $nuevoEjercicio->id_clasificacion = $request->input('clasificacion');
        $nuevoEjercicio->save();
    
        // Redireccionar a la página de inicio de ejercicios o a donde desees
        return redirect()->route('exercises.index')->with('Agregado', 'Ejercicio agregado con éxito');
           
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return route('exercises.edit');
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


    public function destroy($id)
    {

        $ejercicio = Ejercicios::find($id);
        $ejercicio->delete();
        return redirect()->route('exercises.index')->with('Eliminado','Ejercicio eliminado correctamente!');
    }
}
