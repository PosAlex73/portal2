<?php

namespace App\View\Components\Common;

use App\Models\Course;
use Illuminate\View\Component;

class Courses extends Component
{
    public $courses;
    public $selected;
    public $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = '', $selected = '')
    {
        $this->courses = Course::all(['id', 'title']);
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
        return view('components.common.courses');
    }
}
