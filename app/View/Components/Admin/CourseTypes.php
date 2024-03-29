<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class CourseTypes extends Component
{
    public $types;
    public string $selected;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $selected = '')
    {
        $this->types = \App\Enums\Courses\CourseTypes::getAll();
        $this->selected = $selected;
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
