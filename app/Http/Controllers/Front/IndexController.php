<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Notifications\ToolBar\UserNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 *
 */
class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::active()->get();
        $courses = Course::landingCourses()->get();


        return view('front.index', [
            'categories' => $categories,
            'courses' => $courses
        ]);
    }
}
