<?php

namespace App\View\Components\Common;

use App\Enums\Orders\Currencies;
use Illuminate\View\Component;

class Currency extends Component
{
    public $selected;
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value = 0, $selected = '')
    {
        $this->value = $value;
        $this->selected = !empty($selected) ? $selected : Currencies::getDefault();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.currency');
    }
}
