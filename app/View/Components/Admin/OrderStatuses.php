<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class OrderStatuses extends Component
{
    public $statuses;
    public $selected;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($selected = '')
    {
        $this->statuses = \App\Enums\Orders\OrderStatuses::getAll();
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.order-statuses');
    }
}
