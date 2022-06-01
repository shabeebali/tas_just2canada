<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class Admin extends Component
{
    public $title;
    public $createButton;
    public $createRoute;
    public $breadcrumbs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title=NULL,$breadcrumbs = FALSE,$createButton = FALSE, $createRoute = NULL)
    {
        $this->title = $title;
        $this->breadcrumbs = $breadcrumbs;
        $this->createButton = $createButton;
        $this->createRoute = $createRoute;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.admin');
    }
}
