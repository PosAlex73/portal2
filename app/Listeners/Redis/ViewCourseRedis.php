<?php

namespace App\Listeners\Redis;

use App\Events\Redis\ViewCourse;
use Illuminate\Support\Facades\Redis;

class ViewCourseRedis
{
    protected $course_view_key = 'course_view:';

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ViewCourse $event)
    {
        $course = $event->course;
        Redis::incr($this->course_view_key . $course->id);
    }
}
