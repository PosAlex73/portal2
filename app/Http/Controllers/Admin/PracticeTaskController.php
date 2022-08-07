<?php

namespace App\Http\Controllers\Admin;

use App\Alerts\Alert;
use App\Courses\Course;
use App\Enums\Tasks\TaskTypes;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePracticeTaskRequest;
use App\Http\Requests\UpdatePracticeTaskRequest;
use App\Models\PracticeTask;

class PracticeTaskController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PracticeTask  $practiceTask
     * @return \Illuminate\Http\Response
     */
    public function edit(PracticeTask $ptask)
    {
        $course = $ptask->pcourse->class;
        $data = [];

        if ($ptask->type === TaskTypes::TEST) {
            $data['tests'] = $ptask->questions;
        }

        return view('admin.ptasks.edit', [
            'task' => $ptask,
            'data' => $data ?? []
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePracticeTaskRequest  $request
     * @param  \App\Models\PracticeTask  $practiceTask
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePracticeTaskRequest $request, PracticeTask $ptask)
    {
        $fields = $request->validated();
        $ptask->update($fields);

        Alert::flash('status', __('updated'));

        return back();
    }
}
