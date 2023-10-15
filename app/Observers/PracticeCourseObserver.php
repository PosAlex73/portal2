<?php

namespace App\Observers;

use App\Models\Course;
use Illuminate\Support\Str;

class PracticeCourseObserver
{
    public function create(Course $course)
    {
        $course->slug = Str::slug($course->title);
        $course->save();
    }
}
