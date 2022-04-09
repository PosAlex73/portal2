<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseSettingsRequest;
use App\Http\Requests\UpdateCourseSettingsRequest;
use App\Models\CourseSettings;

class CourseSettingsController extends Controller
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
     * @param  \App\Http\Requests\StoreCourseSettingsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseSettingsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseSettings  $courseSettings
     * @return \Illuminate\Http\Response
     */
    public function show(CourseSettings $courseSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseSettings  $courseSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseSettings $courseSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCourseSettingsRequest  $request
     * @param  \App\Models\CourseSettings  $courseSettings
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseSettingsRequest $request, CourseSettings $courseSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseSettings  $courseSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseSettings $courseSettings)
    {
        //
    }
}
