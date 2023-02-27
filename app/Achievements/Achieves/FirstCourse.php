<?php

namespace App\Achievements\Achieves;

use App\Achievements\Achievement;
use Illuminate\Support\Collection;

class FirstCourse extends Achievement
{
    protected const VAR = 'first_course';
    public function checkCondition(Collection $data): bool
    {
        // TODO: Implement checkCondition() method.
    }
}
