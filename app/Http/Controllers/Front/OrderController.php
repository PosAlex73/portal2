<?php

namespace App\Http\Controllers\Front;

use App\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(Request $request)
    {
        if ($request->exists('course_id')) {
            $course = Course::find($request->get('course_id'));
        }

        if (empty($course->title)) {
            Alert::set('status', __('vars.course_id_not_defined'));
            return redirect()->back();
        }

        return view('front.orders.order');
    }

    public function createOrder()
    {

    }
}
