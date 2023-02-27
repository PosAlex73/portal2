<?php

namespace App\Achievements\Achieves;

use App\Achievements\Achievement;
use Illuminate\Support\Collection;

class TenCourses extends Achievement
{
    protected const VAR = 'ten_courses';

    public function checkCondition(Collection $data): bool
    {
        // TODO: Implement checkCondition() method.
    }
}
