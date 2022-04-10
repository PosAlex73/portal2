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
            'front.history' => [
                'name' => 'front.history',
            ],
            'front.notifications' => [
                'name' => 'front.notifications'
            ],
            'front.records' => [
                'front.records'
            ],
            'front.thread' => [
                'name' => 'front.thread'
            ],
            'front.documents' => [
                'name' => 'front.documents'
            ]
        ];
    }
}
