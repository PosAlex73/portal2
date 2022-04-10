<?php

namespace App\Menus\Front;

use App\Menus\IMenu;

class MainToolbar implements IMenu
{
    public static function getMenu(): iterable
    {
        return [
            'front.index' => [
                'name' => 'front.index'
            ],
            'front.services' => [
                'name' => 'front.services'
            ],
            'front.doctors' => [
                'name' => 'front.doctors'
            ],
            'front.clinics' => [
                'name' => 'front.clinics'
            ],
            'front.promotions' => [
                'name' => 'front.promotions'
            ],
            'front.blog' => [
                'name' => 'front.blog'
            ]
        ];
    }
}
