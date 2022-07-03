<?php

namespace App\Menus\Admin;

use App\Menus\IMenu;
use Illuminate\Support\Facades\Route;

class CourseTabs implements IMenu
{

    public static function getMenu(): iterable
    {
        return [
            'pcourses.edit',
            'ptasks.index'
        ];
    }
}
