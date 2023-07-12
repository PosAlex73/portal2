<?php

namespace App\Http\Controllers\Front;

use App\Courses\UserProgressHandler;
use App\Courses\UserResult;
use App\Enums\Tasks\TaskTypes;
use App\Events\TaskDone;
use App\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Models\PracticeTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PracticeTaskController extends Controller
{
    public const GET_TASK_DONE_RESULT = 'practice_result';

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

        if ($task->type === TaskTypes::PRACTICE) {
            $failed_task_result = session()->pull(static::GET_TASK_DONE_RESULT, []);

            //fixme
            if (!empty($failed_task_result)) {
                $failed_task_result = json_decode($failed_task_result, JSON_OBJECT_AS_ARRAY);
                $failed_task_result['result'] = unserialize($failed_task_result['result']);
                $failed_task_result['result'] = join("\n", $failed_task_result['result']);
                $failed_task_result['result'] = nl2br($failed_task_result['result']);
            }
        }

        return view('front.user_progress.practice_tack', [
            'user' => $user,
            'task' => $task,
            'task_done' => $result,
            'failed_task_result' => $failed_task_result ?? []
        ]);
    }

    public function checkTask(Request $request, PracticeTask $task)
    {
        $course = $task->course;
        $user = Auth::user();

        /** @var UserResult $result */
        $result = UserProgressHandler::handleResult($request, $course, $task);

        if ($result->isResult()) {
            Alert::flash('status', __('vars.task_was_done'));
            event(new TaskDone($user, $task, $course));
        } else {
            Alert::error('status', __('vars.some_q_are_wrong'));
        }

        session()->put(static::GET_TASK_DONE_RESULT, json_encode($result->getData()));
        return redirect()->to(route('front.practice_task', ['task' => $task]));
    }
}
