<?php

namespace App\Observers;

use App\Enums\CommonStatuses;
use App\Enums\Settings\UserSettingTypes;
use App\Models\AppNew;
use App\Models\User;
use App\Notifications\NewPlaced;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class NewsObserver
{
    public function created(AppNew $appNew)
    {
        if ($appNew->status === CommonStatuses::ACTIVE) {
            $this->notifyUsers($appNew);
        }
    }

    public function notifyUsers($appNew)
    {
        $users_to_notify = DB::table('user_settings')
            ->where(UserSettingTypes::GET_NEWS_NOTIFICATIONS, '=', CommonStatuses::ACTIVE)->get('user_id')->toArray();

        $users_to_notify = User::whereIn('id', array_column($users_to_notify, 'user_id'))->get();

        Notification::send($users_to_notify, new NewPlaced($appNew));
    }
}
