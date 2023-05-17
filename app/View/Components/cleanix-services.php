<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CleanixServices extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
     public $services;
     public $admin;
    
    
    public function __construct($services, $admin)
    {
        $this->services = $services;
        $this->admin = $admin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cleanix-services');
    }
}
