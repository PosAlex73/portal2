<?php

namespace App\Http\Controllers\Front;

use App\Enums\Courses\CourseStatuses;
use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function courses(Request $request)
    {
        $courses = Course::with(['category', 'tasks'])
            ->where(['status' => CourseStatuses::ACTIVE])
            ->when($request->has('category_id'), function ($query) use ($request) {
                $query->where(['category_id' => $request->input('category_id')]);
            })
            ->paginate(Set::get(SettingTypes::FRONT_PAGINATION));

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
