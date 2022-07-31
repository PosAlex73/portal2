<?php

namespace App\View\Components\Common;

use Illuminate\View\Component;

class Logo extends Component
{
    public $width;
    public $height;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $width = 60, int $height = 50)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.logo');
    }
}
