<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class CourseTabs extends Component
{
    public $course;
    public $tabs;
    public $item;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($course, string $itemName)
    {
        $this->item = $itemName;
        $this->tabs = \App\Menus\Admin\CourseTabs::getMenu();
        $this->course = $course;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.menus.course-tabs');
    }
}
