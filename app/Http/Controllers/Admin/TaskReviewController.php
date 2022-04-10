<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskReviewRequest;
use App\Http\Requests\UpdateTaskReviewRequest;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTaskReviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskReviewRequest $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskReviewRequest  $request
     * @param  \App\Models\TaskReview  $taskReview
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskReviewRequest $request, TaskReview $taskReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaskReview  $taskReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskReview $taskReview)
    {
        //
    }
}
