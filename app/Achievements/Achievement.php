<?php

namespace App\Achievements;

use App\Enums\Achivements\AchievementTypes;
use Illuminate\Support\Collection;

abstract class Achievement
{
    public const TYPE = AchievementTypes::COMMON;
    protected const VAR = 'change_me';

    abstract public function checkCondition(Collection $data): bool;
    public function getInfo(): AchieveInfo
    {
        return new AchieveInfo(
            __('achievements.' . static::VAR . '_title'),
            __('achievements.' . static::VAR . '_description'),
            __('achievements.' . static::VAR . '_condition'),
            __($this->getImage()),
        );
    }

    public function getImage(): string
    {
        return '';
    }
}
