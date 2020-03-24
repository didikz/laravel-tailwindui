<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextField extends Component
{
    public $type;

    public $label;

    public $placeholder;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $label, $placeholder)
    {
        $this->type = $type;
        $this->label = $label;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.text-field');
    }
}
