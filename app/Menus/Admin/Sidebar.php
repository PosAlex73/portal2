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
            new Title('dashboard', 'box'),
            new Link(__('vars.dashboard'), 'dashboard', 'box'),
            new Title('var.users'),
            new Group(__('var.users'), new Collection('users.index'), 'box'),
            new Title(__('courses')),
            new Group(__('courses'), new Collection(['courses.index', 'tasks.index',]), 'user'),
            new Title('commerce', 'box'),
            new Group(__('commerce'), new Collection(['plans.index', 'orders.index']), 'activity'),
            new Title('other', 'box'),
            new Link(__('vars.categories'), 'categories.index'),
            new Link(__('vars.blog'), 'articles.index', 'box'),
            new Link(__('vars.pages'), 'pages.index', 'box'),
        ]);
    }
}
