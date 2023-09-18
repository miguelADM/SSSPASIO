<?php

namespace App\View\Components\home;

use Illuminate\View\Component;

class Services extends Component
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

    public function getJSONServicesData()
    {
        $ruta = resource_path('data') . "/services.json";

        if (!file_exists($ruta)) {
            return 'no existe el archivo';
        }

        $servicesData = json_decode(file_get_contents($ruta), true);

        return $servicesData;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $servicesData = $this->getJSONServicesData();

        return view('components.home.services', compact('servicesData'));
        /* return view('components.home.services'); */
    }
}
