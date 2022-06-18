<?php

namespace App\Enums\Users;

use App\Enums\Enumable;

class UserTypes
{
    use Enumable;

    public const ADMIN = 'A';
    public const SIMPLE = 'S';
    public const MODERATOR = 'M';

    public static function getAdminTypes()
    {
        return [self::ADMIN, self::MODERATOR];
    }

    public static function isAdmin($type)
    {
        return in_array($type, static::getAdminTypes());
    }
}
