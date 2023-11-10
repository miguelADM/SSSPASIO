<?php

namespace App\Http\Controllers;

use App\Models\Tips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RecomendacionNutricionalController extends Controller
{
    
    public function index()
    {
        $paginado = 10;
        
        $param['nutricion'] = DB::table('tips')
                ->where('tipo', 'nutricion')
                ->paginate($paginado);

        return view('admin.nutritional-recommendation', $param);
    }

    
    public function create()
    {
        return route('nutritional-recommendation.create');
    }


    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required', 
        ]);
        
        $descripcion = $request->input('descripcion');
        $imagenPath = null;

        preg_match('/<img.*?src=["\'](.*?)(?=["\']|>)/', $descripcion, $matches);

        if (!empty($matches) && count($matches) >= 2) {
            $imagenSrc = $matches[1];
            $imageName = time() . '_' . uniqid() . '.' . pathinfo($imagenSrc, PATHINFO_EXTENSION);
            Storage::disk('public')->put('public\assets\images\imgNutricion' . $imageName, file_get_contents($imagenSrc));
            $imagenPath = 'public/assets/images/imgNutricion' . $imageName;
        }

        
        $nutricion = new Tips();
        $nutricion->tipo = 'nutricion';
        $nutricion->titulo = $request->input('titulo');
        $nutricion->descripcion = $descripcion;
        $nutricion->imagen = $imagenPath; 
        $nutricion->save();
    
        return redirect()->route('nutritional-recommendation.index')->with('Agregado','Recomendación nutricional agregada correctamente');
    }
    


    public function show($id)
    {
        $param['nutricion'] = DB::table('tips')
                ->where('tipo', 'nutricion','id', $id);
                
        route('nutritional-recommendation.show');
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $Nutricion = Tips::find($id);
        $Nutricion->delete();
        return redirect()->route('nutritional-recommendation.index')->with('Eliminado','Recomendación nutricional eliminada correctamente!');
    }
}
