<?php

namespace App\View\Components\Common;

use App\Models\Category;
use Illuminate\View\Component;

class Categories extends Component
{
    public $categories;
    public $selected;
    public $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = '', $selected = '')
    {
        $this->categories = Category::all(['id', 'title']);
        $this->label = $label;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.categories');
    }
}
