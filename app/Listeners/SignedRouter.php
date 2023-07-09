<?php

namespace App\Listeners;

use App\Enums\Settings\SettingTypes;
use App\Enums\YesNo;
use App\Facades\Set;
use App\Models\SignedUrl;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\URL;

class SignedRouter
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        if (Set::get(SettingTypes::SIGNED_REGISTRATION === YesNo::YES)) {
            return;
        }

        /** @var User $user */
        $user = $event->user;
        $signedRoute = URL::temporarySignedRoute('register-step', now()->addMinutes(60), ['user' => $user->id]);
        $newRoute = new SignedUrl();

    }
}
