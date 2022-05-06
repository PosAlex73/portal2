<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courses(Request $request)
    {
        $courses = Course::all();
        return view('front.courses.index', ['courses' => $courses]);
    }

    public function course(Course $course)
    {
        return view('front.courses.course', ['course' => $course]);
    }
}
