<?php

namespace App\View\Components\admin\sidebar;

use Illuminate\View\Component;

class SidebarList extends Component
{
    public $sidebarLinks = [
        ["text" => 'Usuarios', "href" => 'usuarios', "icon" => 'users'],
        ["text" => 'Grupos de Trabajo', "href" => 'grupos-trabajo', "icon" => 'add-group'],
        ["text" => 'Enfermedades', "href" => 'enfermedades', "icon" => 'heart'],
        ["text" => 'Clasificacion de Ejercicios', "href" => 'clasificacion', "icon" => 'trophy'],
        ["text" => 'Ejercicios', "href" => 'ejercicios', "icon" => 'weights'],
        ["text" => 'Rutinas', "href" => 'rutinas', "icon" => 'exercise-running'],
        ["text" => 'Recomendacion Nutricional', "href" => 'recomendacion-nutricional', "icon" => 'food'],
        ["text" => 'Tips', "href" => 'tips', "icon" => 'tips'],
        ["text" => 'Progreso de Usuarios', "href" => 'progreso', "icon" => 'chart-bar']
    ];
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
        $sidebarLinks = $this->sidebarLinks;
        return view('components.admin.sidebar.sidebar-list', compact('sidebarLinks'));
    }
}
