<?php

namespace App\Menus\Admin;

use App\Menus\Admin\Components\Group;
use App\Menus\Admin\Components\Link;
use App\Menus\Admin\Components\Title;
use App\Menus\IMenu;
use Illuminate\Support\Collection;

class Sidebar implements IMenu
{
    public static function getMenu(): iterable
    {
        return new Collection( [
            new Title(__('dashboard'), 'box'),
            new Link(__('vars.dashboard'), 'dashboard', 'box'),
            new Title(__('vars.users')),
            new Group(__('vars.users'), new Collection(['users.index', 'users.progress.index']), 'box'),
            new Title(__('vars.courses')),
            new Group(__('vars.courses'), new Collection(
                [
                    'courses.index',
                    'pcourses.index',
                    'tasks.index',
                    'questions.index',
                    'images.index'
                ]), 'user'),
            new Title(__('vars.commerce'), 'box'),
            new Group(__('vars.commerce'), new Collection(['plans.index', 'orders.index', 'promotions.index']), 'activity'),
            new Title(__('other'), 'box'),
            new Link(__('vars.news'), 'appnews.index', 'box'),
            new Link(__('vars.categories'), 'categories.index'),
            new Link(__('vars.blog'), 'articles.index', 'box'),
            new Link(__('vars.pages'), 'pages.index', 'box'),
            new Link(__('vars.settings'), 'settings.index', 'box'),
        ]);
    }
}
