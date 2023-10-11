<?php

namespace App\View\Components\admin\sidebar;

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
        $sidebarLinks = getAdminLinks();
        return view('components.admin.sidebar.sidebar-list', compact('sidebarLinks'));
    }
}
