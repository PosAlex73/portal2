<?php

namespace App\Achievements;

use App\Achievements\Achieves\FirstCourse;
use App\Achievements\Achieves\FirstTask;
use App\Achievements\Achieves\MakeProposal;
use App\Achievements\Achieves\Registration;
use App\Achievements\Achieves\ReportError;
use App\Achievements\Achieves\TenCourses;
use Illuminate\Support\Collection;

class AchieveRepository
{
    public static function getAllAchievements(): Collection
    {
        return collect([
            new FirstCourse,
            new FirstTask,
            new Registration,
            new TenCourses,
            new ReportError,
            new MakeProposal,
        ]);
    }
}
