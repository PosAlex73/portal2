<?php

namespace App\Http\Controllers\Front;

use App\Courses\CourseStats;
use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Models\PracticeCourse;
use App\Models\UserProgress;
use Illuminate\Support\Facades\App;
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

    public function myCourse(PracticeCourse $pcourse)
    {
        $user = Auth::user();

        $user_progress = $pcourse->progress()->where('user_id', $user->id)->first();
        if (empty($user_progress)) {
            abort(404);
        }

        /** @var CourseStats $course_stats_service */
        $course_stats_service = App::makeWith(
            CourseStats::class,
            ['user_progress' => $user_progress]
        );

        $course_stats = $course_stats_service->getCourseStats();

        return view('front.user_progress.course', [
            'course' => $pcourse,
            'user' => $user,
            'tasks' => $pcourse->tasks,
            'user_progress' => $user_progress,
            'tasks_data' => $user_progress->data['tasks'] ?? [],
            'courseStats' => $course_stats
        ]);
    }
}
