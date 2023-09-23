<?php

namespace App\View\Components\home;

use Illuminate\View\Component;

class Plans extends Component
{
    public $plans = [
        ['planName' => 'Plan Basico', 'image' => 'basico'],
        ['planName' => 'Plan Premium', 'image' => 'premium'],
        ['planName' => 'Plan Empresarial', 'image' => 'empresarial']
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
        $plans = $this->plans;
        return view('components.home.plans', compact('plans'));
    }
}
