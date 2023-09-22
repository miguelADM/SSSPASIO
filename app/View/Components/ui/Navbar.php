<?php

namespace App\View\Components\ui;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $links = [
        ['href' => '/', 'text' => 'Inicio'],
        ['href' => '/#services', 'text' => 'Servicios'],
        ['href' => '/#benefits', 'text' => 'Beneficios'],
        ['href' => '/#plans', 'text' => 'Planes'],
        ['href' => '/#about', 'text' => 'Nosotros']
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
        $navLinks = $this->links;

        return view('components.ui.navbar', compact('navLinks'));
    }
}
