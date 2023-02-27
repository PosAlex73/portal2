<?php

namespace App\Achievements\Achieves;

use App\Achievements\Achievement;
use Illuminate\Support\Collection;

class FirstTask extends Achievement
{
    protected const VAR = 'first_task';

    public function checkCondition(Collection $data): bool
    {
        // TODO: Implement checkCondition() method.
    }
}
