<?php

namespace App\View\Components\nav;

use Illuminate\View\Component;

class navlink extends Component
{
    public $href;
    public $icon;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($href, $icon, $title)
    {
        $this->href = $href;
        $this->icon = $icon;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav.navlink');
    }
}
