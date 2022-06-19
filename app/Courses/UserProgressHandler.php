<?php

namespace App\Courses;

use App\Models\Course;
use App\Models\Task;
use Illuminate\Http\Request;

class UserProgressHandler
{
    public static function handleResult(Request $request, Course $course, Task $task)
    {
        return true;
    }
}
