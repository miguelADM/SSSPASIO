<?php

namespace App\Http\Controllers;

use App\Models\Tips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class TipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tips = Tips::orderBy("titulo","desc")->paginate(10);
        return view("admin/tips",compact("tips"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
            'imagen' => 'required|image|mimes:jpeg,jpg,GIF,png,svg'
        ]);
        $tip = new Tips; 
        $tip->tipo = $request->input("tipo");
        $tip->titulo = $request->input("titulo");
        $tip->descripcion = $request->input('descripcion');
        
        if($imagen = $request->file('imagen')) {
            $rutaGuard = 'assets\images\home\imagetips';
            $imgProd = $imagen->getClientOriginalName();
            $imagen->move($rutaGuard, $imgProd);
            $tip->imagen = "$imgProd";
        }else{
            $tip->imagen = $nop='noooooooo';
        }

        $tip->save();

        
        return redirect()->route('tips.index')->with('Agregado', 'Tip Agregado');
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
    $tip = Tips::find($id);
    $tip->delete();
    return redirect()->route('tips.index')->with('Eliminado', 'Tip Eliminado');
    }
}
