<?php

namespace App\Enums\Blog;

use App\Enums\Enumable;

class ArticleStatuses
{
    use Enumable;

    public const ACTIVE = 'A';
    public const DISABLED = 'D';
    public const PUBLISHED = 'P';
    public const UNPUBLISHED = 'U';
}
