<?php

namespace App\View\Components;

use Illuminate\View\Component;

class nav-button extends Coponent
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $class;
    public $id;
    public$label;
    public $icon;

    public function __construct($class,$id,$label,$icon)
    { 
        $this->class=$class;
        $this->id=$id;
        $this->label=$label;
        $this->icon=$icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-button');
    }
}
