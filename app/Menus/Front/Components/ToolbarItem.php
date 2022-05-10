<?php

namespace App\Menus\Front\Components;

class ToolbarItem
{
    public function __construct(
        public $route,
        public $name = 'default',
        public $icon = '',
        public $items = []
    )
    {
        $this->route = route($route);
        $this->name = __('vars.' . $this->name);

        if (is_callable($items)) {
            $this->items = $items();
        } else {
            $this->items = $items;
        }
    }
}
