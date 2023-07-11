<?php

namespace App\Listeners;

use App\Enums\Settings\SettingTypes;
use App\Enums\YesNo;
use App\Facades\Set;
use App\Models\User;
use App\Notifications\UserWelcome;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class RegisterWelcome
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        if (Set::get(SettingTypes::SIGNED_REGISTRATION) === YesNo::NO) {
            return false;
        }

        /** @var User $user */
        $user = $event->user;
        $user->notify(new UserWelcome($user));
        Log::info('User registered: ' . $user->id);
    }
}
