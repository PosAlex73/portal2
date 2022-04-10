<?php

namespace App\View\Components\Menus;

use App\Menus\Admin\Sidebar;
use Illuminate\View\Component;

class AdminSidebar extends Component
{
    public $sidebar;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->sidebar = Sidebar::getMenu();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.sidebar');
    }
}
