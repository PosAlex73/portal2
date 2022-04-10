<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Courses\StoreTasksCategoryRequest;
use App\Http\Requests\Admin\Courses\UpdateTasksCategoryRequest;
use App\Models\TasksCategory;

class TasksCategoryController extends Controller
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
     * @param  \App\Http\Requests\Admin\Courses\StoreTasksCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTasksCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TasksCategory  $tasksCategory
     * @return \Illuminate\Http\Response
     */
    public function show(TasksCategory $tasksCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TasksCategory  $tasksCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(TasksCategory $tasksCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Courses\UpdateTasksCategoryRequest  $request
     * @param  \App\Models\TasksCategory  $tasksCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTasksCategoryRequest $request, TasksCategory $tasksCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TasksCategory  $tasksCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(TasksCategory $tasksCategory)
    {
        //
    }
}
