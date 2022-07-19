<?php

namespace App\Http\Controllers\Front;

use App\Courses\UserProgressHandler;
use App\Events\TaskDone;
use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\EventDispatcher\EventDispatcher;


class TaskController extends Controller
{
    public function task(Task $task)
    {
        if (Gate::denies('view', $task)) {
            abort(403);
        };

        return view('front.tasks.index', [
            'task' => $task
        ]);
    }

    public function doTask(Task $task)
    {
        $user = Auth::user();

        return view('front.user_progress.task', [
            'user' => $user,
            'task' => $task
        ]);
    }

    public function checkTask(Request $request, Task $task)
    {
        $course = $task->course;
        $user = Auth::user();

        $result = UserProgressHandler::handleResult($request, $course, $task);

        if ($result) {
            event(new TaskDone($user, $task, $course));
        }


    }
}
