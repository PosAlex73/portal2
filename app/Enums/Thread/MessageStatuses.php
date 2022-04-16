<?php

namespace App\Enums\Thread;

use App\Enums\Enumable;

class MessageStatuses
{
    use Enumable;

    public const READ = 'R';
    public const UNREAD = 'U';
}
