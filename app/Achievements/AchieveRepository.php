<?php

namespace App\Achievements;

use Illuminate\Support\Collection;

class AchieveRepository
{
    public static function getAllAchievements(): Collection
    {
        return collect([
            FirstCourse::class,
            FirstTask::class,
            Registration::class,
            TenCourses::class
        ]);
    }
}
