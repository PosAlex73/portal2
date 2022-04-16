<?php

namespace App\Menus\Admin;

use App\Menus\IMenu;

class UserTabs implements IMenu
{

    public static function getMenu(): iterable
    {
        return [
            'users.edit',
            'users.profiles',
            'users.settings',
            'users.progress',
            'thread.edit'
        ];
    }
}
