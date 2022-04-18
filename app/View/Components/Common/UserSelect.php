<?php

namespace App\View\Components\Common;

use App\Enums\Users\UserTypes;
use App\Models\User;
use Illuminate\View\Component;

class UserSelect extends Component
{
    public $users;
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = UserTypes::SIMPLE)
    {
        $this->type = $type;
        $this->users = User::where('status', $this->type)->all(['id', 'first_name', 'last_name']);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.user-select');
    }
}
