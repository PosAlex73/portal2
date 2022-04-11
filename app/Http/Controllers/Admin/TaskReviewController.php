<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Settings\SettingTypes;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Courses\StoreTaskReviewRequest;
use App\Http\Requests\Admin\Courses\UpdateTaskReviewRequest;
use App\Models\TaskReview;

class TaskReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task_reviews = TaskReview::paginate(SettingTypes::ADMIN_PAGINATION);

        return view('admin.task_reviews.index', ['task_reviews' => $task_reviews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.task_reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Courses\StoreTaskReviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskReviewRequest $request)
    {
        $fields = $request->safe()->only(['task_id', 'user_id', 'text']);
        $task_review = TaskReview::create($fields);
        session()->flash('status', __('vars.review_was_created'));

        return redirect(route('task_reviews.edit', ['task_review' => $task_review]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TaskReview  $taskReview
     * @return \Illuminate\Http\Response
     */
    public function show(TaskReview $taskReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaskReview  $taskReview
     * @return \Illuminate\Http\Response
     */
    public function edit(TaskReview $taskReview)
    {
        return view('admin.task_reviews.edit', ['task_review' => $taskReview]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Courses\UpdateTaskReviewRequest  $request
     * @param  \App\Models\TaskReview  $taskReview
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskReviewRequest $request, TaskReview $taskReview)
    {
        $fields = $request->safe()->only(['task_id', 'user_id', 'text']);
        $taskReview->update($fields);
        session()->flash('status', __('vars.review_was_updated'));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaskReview  $taskReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskReview $taskReview)
    {
        $taskReview->delete();
        session()->flash('status', __('vars.review_was_deleted'));

        return redirect(route('task_reviews.index'));
    }
}
