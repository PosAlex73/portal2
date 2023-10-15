<?php

namespace App\Observers;

use App\Models\Course;
use Illuminate\Support\Str;

class CourseObserver
{
    public function created(Course $course)
    {
        $course->slug = Str::slug($course->title);
        $course->save();
    }
}
