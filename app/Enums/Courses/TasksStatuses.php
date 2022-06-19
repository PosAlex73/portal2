<?php

namespace App\Enums\Courses;

use App\Enums\Enumable;

class TasksStatuses
{
    use Enumable;

    public const NEW = 'N';
    public const IN_PROGRESS = 'I';
    public const DONE = 'D';
    public const FAILED = 'F';
}
