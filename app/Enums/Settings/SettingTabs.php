<?php

namespace App\Enums\Settings;

use App\Enums\Enumable;

class SettingTabs
{
    use Enumable;

    public const COMMON = 'common_settings';
    public const USERS = 'users_tab';
    public const FRONT_TAB = 'front_tab';
    public const ADMIN_TAB = 'admin_tab';
}
