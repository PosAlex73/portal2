<?php

namespace App\Enums;

class ArticleStatuses
{
    use Enumable;

    public const ACTIVE = 'A';
    public const DISABLED = 'D';
    public const PUBLISHED = 'P';
    public const UNPUBLISHED = 'U';
}
