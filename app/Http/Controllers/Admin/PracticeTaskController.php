<?php

namespace App\Http\Controllers\Admin;

use App\Alerts\Alert;
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
        return view('admin.ptasks.edit', ['task' => $ptask]);
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
