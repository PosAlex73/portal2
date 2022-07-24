<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Courses\StoreCourseRequest;
use App\Http\Requests\Admin\Courses\UpdateCourseRequest;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::with(['category'])->paginate(Set::get(SettingTypes::ADMIN_PAGINATION));

        return view('admin.courses.index', ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Courses\StoreCourseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseRequest $request)
    {
        $fields = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images/courses', 'public');
            $fields['image'] = $image;
        }

        $course = Course::create($fields);

        session()->flash('status', __('vars.course_was_created'));

        return redirect()->to(route('courses.edit', ['course' => $course]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.courses.edit', ['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Courses\UpdateCourseRequest  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $fields = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images/courses', 'public');
            $fields['image'] = $image;
            $old_file = $course->image;
            Storage::disk('public')->delete($old_file);
        }

        $course->update($fields);
        session()->flash('status', __('vars.course_was_updated'));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        session()->flash('status', __('vars.course_was_deleted'));

        return redirect(route('courses.index'));
    }
}
