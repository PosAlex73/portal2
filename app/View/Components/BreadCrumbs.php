<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BreadCrumbs extends Component
{
    public $breadcrumbs;
    public $user;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->breadcrumbs = \Diglactic\Breadcrumbs\Breadcrumbs::generate();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bread-crumbs');
    }
}
