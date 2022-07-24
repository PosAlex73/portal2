<?php

namespace App\Http\Controllers\Front;

use App\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Notifications\ToolBar\UserNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $notifications = $user->notifications;

        foreach ($notifications as $notification) {
            $notification->markAsRead();
        }

        $notifications = UserNotification::getNotificationsArray($notifications);

        return view('front.notifications.index', [
            'user' => $user,
            'notifications' => $notifications
        ]);
    }

    public function destroy(Request $request)
    {
        $notification_ids = $request->get('notification_ids');
        $user = Auth::user();
        $user->notifications()->delete($notification_ids);

        Alert::flash('status', __('vars.notifications_were_delete'));

        return back();
    }
}
