<?php

namespace App\View\Components\Front;

use Illuminate\View\Component;

class CourseStats extends Component
{
    public array $courseStats;
    public $inProgress;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $courseStats)
    {
        $this->courseStats = $courseStats;
        $this->inProgress = $courseStats['total_tasks'] - $courseStats['tasks_done'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.course-stats');
    }
}
