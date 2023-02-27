<?php

namespace App\Achievements\Achieves;

use App\Achievements\Achievement;
use Illuminate\Support\Collection;

class Registration extends Achievement
{
    protected const VAR = 'registration';

    public function checkCondition(Collection $data): bool
    {
        // TODO: Implement checkCondition() method.
    }
}
