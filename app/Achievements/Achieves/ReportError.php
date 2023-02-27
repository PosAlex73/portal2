<?php

namespace App\Achievements\Achieves;

use App\Achievements\AchieveInfo;
use App\Achievements\Achievement;
use Illuminate\Support\Collection;

class ReportError extends Achievement
{
    protected const VAR = 'report_error';

    public function checkCondition(Collection $data): bool
    {
        // TODO: Implement checkCondition() method.
    }
}
