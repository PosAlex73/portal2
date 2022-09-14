<?php

namespace App\View\Components\Admin;

use App\Models\PracticeCourse;
use Illuminate\View\Component;

class Products extends Component
{
    public $products;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->products = PracticeCourse::where('status', \App\Enums\Courses\CourseStatuses::ACTIVE)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.products');
    }
}
