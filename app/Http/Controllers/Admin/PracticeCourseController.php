<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePracticeCourseRequest;
use App\Http\Requests\UpdatePracticeCourseRequest;
use App\Models\PracticeCourse;

class PracticeCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \App\Http\Requests\StorePracticeCourseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePracticeCourseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PracticeCourse  $practiceCourse
     * @return \Illuminate\Http\Response
     */
    public function show(PracticeCourse $practiceCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PracticeCourse  $practiceCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(PracticeCourse $practiceCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePracticeCourseRequest  $request
     * @param  \App\Models\PracticeCourse  $practiceCourse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePracticeCourseRequest $request, PracticeCourse $practiceCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PracticeCourse  $practiceCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(PracticeCourse $practiceCourse)
    {
        //
    }
}
