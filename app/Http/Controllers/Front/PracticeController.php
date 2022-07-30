<?php

namespace App\Http\Controllers\Front;

use App\Enums\Courses\CourseStatuses;
use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Models\PracticeCourse;
use App\Models\UserProgress;
use Illuminate\Support\Facades\Auth;

class PracticeController extends Controller
{
    public function index()
    {
        $pcourses = PracticeCourse::with(['category'])
            ->active()
            ->paginate(Set::get(SettingTypes::FRONT_PAGINATION));

        return view('front.pcourses.index', [
            'courses' => $pcourses
        ]);
    }

    public function pcourse(PracticeCourse $pcourse)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $user_has_course = UserProgress::where('user_id', $user->id)->where('course_id', $pcourse->id)->first();
        }

        return view('front.pcourses.pcourse', [
            'course' => $pcourse,
            'user_has_course' => $user_has_course ?? false
        ]);
    }
}
