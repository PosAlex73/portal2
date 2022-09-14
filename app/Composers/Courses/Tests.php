<?php

namespace App\Composers\Courses;

use App\Models\PracticeTask;
use Illuminate\View\View;

class Tests
{
    public function compose(View $view)
    {
        $view->with('ptasks', PracticeTask::getTests()->get());
    }
}
