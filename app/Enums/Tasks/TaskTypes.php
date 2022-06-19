<?php

namespace App\Enums\Tasks;

use App\Enums\Enumable;

class TaskTypes
{
    use Enumable;

    public const TEST = 'test';
    public const THEORY = 'theory';
    public const PRACTICE = 'practice';
}
