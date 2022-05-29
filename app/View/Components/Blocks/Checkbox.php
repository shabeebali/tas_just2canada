<?php

namespace App\View\Components\Blocks;

use Illuminate\View\Component;

class Checkbox extends Component
{
    public $label;
    public $name;
    public $isChecked;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $isChecked)
    {
        $this->name = $name;
        $this->label = $label;
        $this->isChecked = $isChecked;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blocks.checkbox');
    }
}
