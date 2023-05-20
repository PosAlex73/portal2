<?php

namespace App\CourseUtils;

use App\Models\UserProgress;

class CourseProgressHelper
{
    public function getArrayCourseForStats(iterable $courses)
    {
        $result = [];

        /** @var UserProgress $course */
        foreach ($courses as $course) {
            $result[$course->id] = $this->getCourseStats($course);
        }
    }

    public function getCourseStats(UserProgress $progress): CourseStats
    {
        $courseStats = new CourseStats(
            $progress->id,
        );

        $tasksCount = $progress->course()->tasks()->count();


    }
}
