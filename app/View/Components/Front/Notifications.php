<?php

namespace App\View\Components\Front;

use App\Models\User;
use App\Notifications\ToolBar\UserNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Notifications extends Component
{
    public ?User $user;
    public $notifications;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->user = Auth::check() ? Auth::user() : null;
        $this->notifications = $this->user ? $this->user->unreadNotifications()->limit(5)->get() : [];
        $this->notifications = UserNotification::getNotificationsArray($this->notifications);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.notifications');
    }
}
