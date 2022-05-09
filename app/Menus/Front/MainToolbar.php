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
                fn () => Plan::where(['status' => CommonStatuses::ACTIVE])
                    ->limit(Set::get(SettingTypes::FRONT_PAGINATION))
                    ->get()
            ),

            new ToolbarItem(
                'front.courses',
                'courses',
                'box',
                fn () => Course::where(['status' => CourseStatuses::ACTIVE])
                    ->limit(Set::get(SettingTypes::FRONT_PAGINATION))
                    ->get()
            ),

            new ToolbarItem(
                'front.blog',
                'blog',
                'box'
            ),

            new ToolbarItem(
                'front.promotions',
                'promotions',
                'box',
                fn () => Promotion::where(['status' => CommonStatuses::ACTIVE])
                ->limit(Set::get(SettingTypes::FRONT_PAGINATION))
                ->get()
            )
        ];
    }
}
