<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class CourseTypes extends Component
{
    public $types;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->types = \App\Enums\Courses\CourseTypes::getAll();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.course-types');
    }
}
