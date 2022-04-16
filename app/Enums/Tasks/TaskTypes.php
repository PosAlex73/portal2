<?php

namespace App\Enums\Tasks;

use App\Enums\Enumable;

class TaskTypes
{
    use Enumable;

    public const TEST = 'T';
    public const THEORY = 'A';
    public const PRACTICE = 'P';
}
