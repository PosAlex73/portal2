<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class UserTabs extends Component
{
    public $tabs;
    public $user;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->tabs = \App\Menus\Admin\UserTabs::getMenu();
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.user-tabs');
    }
}
