<?php

namespace App\Menus\Front;

use App\Menus\IMenu;

class UserTabs implements IMenu
{
    public static function getMenu(): iterable
    {
        return [
            'front.profile' => [
                'name' => 'front.profile',
            ],
            'front.courses' => [
                'name' => 'front.courses'
            ],
            'front.settings' => [
                'name' => 'front.settings',
            ],
        ];
    }
}
