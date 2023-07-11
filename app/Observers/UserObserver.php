<?php

namespace App\Observers;

use App\Enums\Settings\SettingTypes;
use App\Enums\Users\SignedRoutes;
use App\Enums\Users\UserStatuses;
use App\Facades\Set;
use App\Models\SignedUrl;
use App\Models\User;
use App\Notifications\SignedRoute;
use App\Notifications\UserBanned;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\URL;
use Watson\Active\Route;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $user->profile()->create();
        $user->settings()->create();
        $user->thread()->create();

        if (Set::get(SettingTypes::SIGNED_REGISTRATION)) {
            $signedRoute = URL::temporarySignedRoute('front.signed-route', now()->addMinutes(60), ['user_id' => $user->id]);

            SignedUrl::create([
                'user_id' => $user->id,
                'url' => $signedRoute,
                'time_life' => 60,
                'status' => SignedRoutes::CREATED
            ]);

            User::update([
                'status' => UserStatuses::DISABLED
            ]);

            Notification::send(new SignedRoute());
        }
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        if ($user->status === UserStatuses::BANNED) {
            $user->notify(new UserBanned());
        }
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        $user->profile()->delete();
        $user->thread()->delete();
        $user->progress()->delete();
        $user->settings()->delete();
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
