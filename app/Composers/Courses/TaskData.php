<?php

namespace App\Composers\Courses;

use App\Enums\CommonStatuses;
use App\Enums\Courses\TasksStatuses;
use App\Enums\Tasks\TaskTypes;
use App\Models\Course;
use Illuminate\View\View;

class TaskData
{
    public function compose(View $view)
    {
        $view->with('task_statuses', CommonStatuses::getAll());
        $view->with('task_types', TaskTypes::getAll());
    }
}
