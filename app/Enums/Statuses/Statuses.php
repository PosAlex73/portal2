<?php

namespace App\Enums\Statuses;

use App\Enums\Enumable;

class Statuses
{
    use Enumable;

    public const INFO = 'info';
    public const SUCCESS = 'success';
    public const DANGER = 'danger';
    public const PRIMARY = 'primary';
    public const WARNING = 'warning';
}
