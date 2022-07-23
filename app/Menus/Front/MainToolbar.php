<?php

namespace App\Menus\Front;

use App\Enums\CommonStatuses;
use App\Enums\Courses\CourseStatuses;
use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
use App\Menus\Front\Components\ToolbarItem;
use App\Menus\IMenu;
use App\Models\Course;
use App\Models\Plan;
use App\Models\Promotion;

class MainToolbar implements IMenu
{
    public static function getMenu(): iterable
    {
        return [
            new ToolbarItem(
                'front.plans',
                'plans',
                'box',
            ),

            new ToolbarItem(
                'front.courses',
                'courses',
                'box',
                [
                    __('vars.courses') => 'front.courses',
                    __('vars.pcourses') => 'front.pcourses'
                ],
                true
            ),

            new ToolbarItem(
                'front.blog',
                'blog',
                'box',
            ),

            new ToolbarItem(
                'front.promotions',
                'promotions',
                'box',
            ),
            new ToolbarItem(
                'front.news',
                'news',
                'box'
            )
        ];
    }
}
