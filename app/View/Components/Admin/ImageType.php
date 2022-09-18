<?php

namespace App\View\Components\Admin;

use App\Enums\ImageTypes;
use Illuminate\View\Component;

class ImageType extends Component
{
    public $types;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->types = ImageTypes::getAll();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.image-type');
    }
}
