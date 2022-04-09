<?php

namespace App\Enums\Courses;

use App\Enums\Enumable;

class CourseStatuses
{
    use Enumable;

    public const ACTIVE = 'A';
    public const DISABLED = 'D';
    public const DELETED = 'R';
    public const IN_PROGRESS = 'I';
}
