<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function myCourses()
    {
        $user = Auth::user();
        $courses = $user->courses;

        return view('front.courses.user_courses', [
            'courses' => $courses,
            'user' => $user
        ]);
    }
}
