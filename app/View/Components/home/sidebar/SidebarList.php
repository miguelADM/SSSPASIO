<?php

namespace App\View\Components\home\sidebar;

use Illuminate\View\Component;

class SidebarList extends Component
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
        $sidebarLinks = getUserLinks();
        return view('components.home.sidebar.sidebar-list', compact('sidebarLinks'));
    }
}
