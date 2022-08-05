<?php

namespace App\Achievements;

use App\Enums\Achivements\AchievementTypes;
use Illuminate\Support\Collection;

abstract class Achievement
{
    public const TYPE = AchievementTypes::COMMON;

    abstract public function checkCondition(Collection $data): bool;
}
