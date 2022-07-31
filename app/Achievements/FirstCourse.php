<?php

namespace App\Achievements;

use App\Models\User;
use App\Models\UserProgress;
use Illuminate\Support\Collection;

class FirstCourse extends Achievement
{
    public function checkCondition(Collection $data): bool
    {
        /** @var User $user */
        $user = $data['user'];
        $course = $data['course'];

        $user_courses_count = $user->progress()->count();
        if ($user_courses_count !== 0) {
            return false;
        }

        //todo
    }
}
