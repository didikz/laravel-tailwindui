<?php

namespace App\View\Components;

use Illuminate\View\Component;

class checkbox extends Component
{
    public $label;

    public $items;

    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $items)
    {
        $this->label = $label;
        $this->name = $name;
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.checkbox');
    }
}
