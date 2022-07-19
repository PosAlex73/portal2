<?php

namespace App\Enums\Courses;

use App\Enums\Enumable;

class UserProgressStatuses
{
    use Enumable;

    public const IN_PROGRESS = 'I';
    public const FINISHED = 'F';
    public const NEW_COURSE = 'N';
}
