<?php

namespace App\Enums\Settings;

use App\Enums\Enumable;

class SettingTypes
{
    use Enumable;

    public const LANGUAGE = 'language';
    public const SITE_TILE = 'site_title';
    public const SITE_DESCRIPTION = 'description';
    public const SITE_ACTIVE = 'active';

    public const ADMIN_PAGINATION = 'admin_paginating';
    public const FRONT_PAGINATION = 'front_pagination';

    public const LOGO = 'logo';

    public const SOCIAL_LOGIN = 'social_login';
}
