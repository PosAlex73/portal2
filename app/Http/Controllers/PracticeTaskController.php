<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePracticeTaskRequest;
use App\Http\Requests\UpdatePracticeTaskRequest;
use App\Models\PracticeTask;

class PracticeTaskController extends Controller
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
     * @param  \App\Http\Requests\StorePracticeTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePracticeTaskRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PracticeTask  $practiceTask
     * @return \Illuminate\Http\Response
     */
    public function show(PracticeTask $practiceTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PracticeTask  $practiceTask
     * @return \Illuminate\Http\Response
     */
    public function edit(PracticeTask $practiceTask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePracticeTaskRequest  $request
     * @param  \App\Models\PracticeTask  $practiceTask
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePracticeTaskRequest $request, PracticeTask $practiceTask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PracticeTask  $practiceTask
     * @return \Illuminate\Http\Response
     */
    public function destroy(PracticeTask $practiceTask)
    {
        //
    }
}
