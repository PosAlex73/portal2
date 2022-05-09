<?php

namespace App\View\Components\Common;

use Illuminate\View\Component;

class Pagination extends Component
{
    public $route;
    public $items;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $items = [])
    {
        $this->route = $route;
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.pagination');
    }
}
