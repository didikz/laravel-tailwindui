<?php

namespace App\View\Components;

use Illuminate\View\Component;

class dropdown extends Component
{
    public $label;

    public $items;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $items)
    {
        $this->label = $label;
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.dropdown');
    }
}
