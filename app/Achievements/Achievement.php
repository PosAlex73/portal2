<?php

namespace App\Achievements;

use Illuminate\Support\Collection;

abstract class Achievement
{
    abstract public function checkCondition(Collection $data): bool;
}
