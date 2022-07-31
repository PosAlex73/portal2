<?php

namespace App\View\Components\Front;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Messages extends Component
{
    public int $messages_count;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->messages_count = 0;
        if (Auth::check()) {

            /** @var User $user */
            $user = Auth::user();
            $this->messages_count = $user->unreadNotifications()->count();
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.messages');
    }
}
