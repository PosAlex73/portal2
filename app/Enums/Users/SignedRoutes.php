<?php

namespace App\Enums\Users;

use App\Enums\Enumable;

class SignedRoutes
{
    use Enumable;

    public const ACTIVATE = 'A';
    public const CREATED = 'C';
    public const EXPIRED = 'E';
}
