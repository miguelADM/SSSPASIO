<?php

namespace App\View\Components\welcome;

use Illuminate\View\Component;

class SocialNetworks extends Component
{
    public $networks = [
        ['name' => 'facebook', 'url' => 'https://www.facebook.com/profile.php?id=100063713006920', 'color' => '#1877F2'],
        ['name' => 'youtube', 'url' => 'https://www.youtube.com/channel/UC1FoqPUNzsfBCY0aVJ2MBDw?app=desktop', 'color' => '#FF0000'],
        ['name' => 'telegram', 'url' => 'https://msng.link/o?spasssio=tg', 'color' => '#0088CC'],
        ['name' => 'instagram', 'url' => 'https://www.instagram.com/spasssio/?igshid=YmMyMTA2M2Y%3D', 'color' => '#f600a8'],
        ['name' => 'x', 'url' => 'https://twitter.com/spasssio?t=wjk9fCKU954LDVGezrrw4Q&s=08', 'color' => '#000000'],
        ['name' => 'whatsapp', 'url' => 'https://api.whatsapp.com/send?phone=5215512583151&text=Hola,%20vengo%20de%20la%20p%C3%A1gina%20web%20quisiera%20saber%20m%C3%A1s%20sobre%20Spasssio', 'color' => '#25D366'],
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
        $socialNetworks = $this->networks;

        return view('components.welcome.social-networks', compact('socialNetworks'));
    }
}
