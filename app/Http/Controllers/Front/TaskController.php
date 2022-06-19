<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Support\Facades\Gate;


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

    }
}
