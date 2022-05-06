<?php

namespace App\Menus\Front;

use App\Menus\IMenu;

class MainToolbar implements IMenu
{
    public static function getMenu(): iterable
    {
        return [
            'front.plans' => [
                'name' => 'front.services'
            ],
            'front.courses' => [
                'name' => 'front.doctors'
            ],
            'front.blog' => [
                'name' => 'front.clinics'
            ],
            'front.promotions' => [
                'name' => 'front.promotions'
            ],
        ];
    }
}
