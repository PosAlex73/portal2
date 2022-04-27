<?php

namespace App\View\Components\Common;

use Illuminate\View\Component;

class CommonStatuses extends Component
{
    public $statuses;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->statuses = \App\Enums\CommonStatuses::getAll();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.common-statuses');
    }
}
