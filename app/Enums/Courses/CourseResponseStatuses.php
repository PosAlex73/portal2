<?php

namespace App\Enums\Courses;

use App\Enums\Enumable;

class CourseResponseStatuses
{
    use Enumable;

    public const PRACTICE_DONE = 200;
    public const PRACTICE_FAILED = 500;
}
