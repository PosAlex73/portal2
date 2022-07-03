<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Courses\UpdatePracticeCourseRequest;
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
        $courses = PracticeCourse::with(['category'])->paginate(Set::get(SettingTypes::ADMIN_PAGINATION));

        return view('admin.pcourses.index', [
            'courses' => $courses
        ]);
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
        return view('admin.pcourses.edit', [
            'course' => $practiceCourse
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Courses\UpdatePracticeCourseRequest  $request
     * @param  \App\Models\PracticeCourse  $practiceCourse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePracticeCourseRequest $request, PracticeCourse $practiceCourse)
    {
        $fields = $request->safe()->only([
            'title', 'description', 'short_description', 'image', 'status', 'category_id', 'price', 'type',
        ]);

        $practiceCourse->update($fields);
        session()->flash('status', __('vars.course_was_update'));

        return back();
    }
}
