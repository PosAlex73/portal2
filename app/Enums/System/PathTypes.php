<?php

namespace App\Enums\System;

use App\Enums\Enumable;

class PathTypes
{
    use Enumable;

    public const FEATURE = 'F';
    public const BUG = 'B';
    public const FIX = 'I';
}
