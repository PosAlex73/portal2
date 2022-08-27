<?php

namespace App\View\Components\Common;

use App\Enums\Users\UserTypes;
use App\Models\User;
use Illuminate\View\Component;

class Users extends Component
{
    public $users;
    public int $selected;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $selected = -1)
    {
        $this->users = User::where('type', UserTypes::SIMPLE)->get();

        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.users');
    }
}
