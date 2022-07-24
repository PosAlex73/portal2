<?php

namespace App\Courses;

use App\Models\Course;
use App\Models\Task;
use App\Models\User;
use App\Models\UserProgress;
use Illuminate\Http\Request;
use Mockery\Exception;

class UserProgressHandler
{
    public static function handleResult(Request $request, Course $course, Task $task)
    {
        return true;
    }

    public static function checkDoneTask(Task $task, User $user)
    {
        $course = $task->course;
        $user_progress = UserProgress::where([
            'user_id' => $user->id,
            'course_id' => $course->id
        ])->first();

        if (empty($user_progress)) {
            throw new Exception(__('vars.course_not_found'));
        }

        return (array_key_exists($task->id, $user_progress->data['tasks'] ?? []));
    }
}
