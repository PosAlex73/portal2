<?php

namespace App\Enums\Orders;

use App\Enums\Enumable;

class OrderStatuses
{
    use Enumable;

    public const OPEN = 'O';
    public const CLOSE = 'C';
    public const PROCESS = 'P';
    public const CANCEL = 'C';
    public const FAILED = 'F';
}
