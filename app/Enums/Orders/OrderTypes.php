<?php

namespace App\Enums\Orders;

use App\Enums\Enumable;

class OrderTypes
{
    use Enumable;

    public const COURSE = 'C';
    public const PLAN = 'P';
    public const PCOURSE = 'A';
}
