<?php

namespace App\Http\Controllers\Front;

use App\Courses\UserProgressHandler;
use App\Enums\Tasks\TaskTypes;
use App\Events\TaskDone;
use App\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Models\PracticeTask;
use App\Models\Task;
use App\Models\TestQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PracticeTaskController extends Controller
{
    public function task(PracticeTask $task)
    {
        if (Gate::denies('view', $task)) {
            abort(403);
        };

        return view('front.tasks.index', [
            'task' => $task
        ]);
    }

    public function doTask(PracticeTask $task)
    {
        $user = Auth::user();
        $result = UserProgressHandler::checkDoneTask($task, $user);

        return view('front.user_progress.practice_tack', [
            'user' => $user,
            'task' => $task,
            'task_done' => $result
        ]);
    }

    public function checkTask(Request $request, PracticeTask $task)
    {
        $course = $task->course;
        $user = Auth::user();

        $result = UserProgressHandler::handleResult($request, $course, $task);

        if ($result->isResult()) {
            Alert::flash('status', __('vars.task_was_done'));
            event(new TaskDone($user, $task, $course));
        } else {
            Alert::error('status', __('vars.some_q_are_wrong'));
        }

        return redirect()->to(route('front.practice_task', ['task' => $task]));
    }
}
