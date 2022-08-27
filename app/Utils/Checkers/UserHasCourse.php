<?php

namespace App\Utils\Checkers;

use App\Models\UserProgress;

class UserHasCourse
{
    public static function UserHasCourse(int $user_id, int $course_id): bool
    {
        //fixme move it to request form
        $course = UserProgress::where([
            'course_id' => $course_id,
            'user_id' => $user_id
        ])->first();

        return empty($course);
    }
}
