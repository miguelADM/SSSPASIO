<?php

namespace App\View\Components\Carpeta;

use Illuminate\View\Component;

class Prueba extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $param['nombre'] = "angel";
        return view('components.carpeta.Prueba',$param);
    }
}
