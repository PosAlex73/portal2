<?php

namespace App\Enums\Tasks;

use App\Enums\Enumable;

class CompleteTypes
{
    use Enumable;

    public const OPEN = 1;
    public const IN_PROGRESS = 2;
    public const DONE = 3;
}
