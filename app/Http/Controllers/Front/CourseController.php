<?php

namespace App\Http\Controllers\Front;

use App\Enums\Courses\CourseStatuses;
use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\UserProgress;
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
        if (Auth::check()) {
            $user = Auth::user();
            $user_has_course = UserProgress::where('user_id', $user->id)->where('course_id', $course->id)->first();
        }

        return view('front.courses.course', [
            'course' => $course,
            'user_has_course' => $user_has_course ?? false
        ]);
    }

    //TODO rename
    public function myCourse(Course $course)
    {
        $user = Auth::user();
        $user_progress = UserProgress::where('course_id', $course->id)->where('user_id', $user->id)->first();

        if (empty($user_progress)) {
            abort(404);
        }

        return view('front.user_progress.course', [
            'course' => $course,
            'user' => $user,
            'tasks' => $course->tasks,
            'user_progress' => $user_progress,
            'tasks_data' => $user_progress->data['tasks']
        ]);
    }
}
