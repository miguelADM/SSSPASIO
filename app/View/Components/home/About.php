<?php

namespace App\View\Components\home;

use Illuminate\View\Component;

class About extends Component
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
        $ruta = resource_path('data') . "/about.json";

        if (!file_exists($ruta)) {
            return 'no existe el archivo';
        }

        $aboutData = json_decode(file_get_contents($ruta), true);

        return $aboutData;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $aboutData = $this->getJSONData();
        return view('components.home.about', compact('aboutData'));
    }
}
