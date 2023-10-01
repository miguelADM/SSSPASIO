<?php

namespace App\View\Components\welcome;

use Illuminate\View\Component;

class Benefits extends Component
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

    public function getJSONData()
    {
        $ruta = resource_path('data') . "/benefits.json";

        if (!file_exists($ruta)) {
            return 'no existe el archivo';
        }

        $benefitsData = json_decode(file_get_contents($ruta), true);

        return $benefitsData;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $benefitsData = $this->getJSONData();

        return view('components.welcome.benefits', compact('benefitsData'));
    }
}
