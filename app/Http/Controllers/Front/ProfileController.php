<?php

namespace App\Http\Controllers\Front;

use App\Achievements\AchieveRepository;
use App\Enums\CommonStatuses;
use App\Enums\Settings\UserSettingTypes;
use App\Enums\Thread\MessageStatuses;
use App\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Users\MessageRequest;
use App\Http\Requests\Front\Users\SettingsRequest;
use App\Http\Requests\Front\Users\UpdateUserProfileRequest;
use App\Http\Requests\Front\Users\UpdateUserRequest;
use App\Models\AppNew;
use App\Models\Thread;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        $news = AppNew::where('status', CommonStatuses::ACTIVE)->take(3)->get();
        $profile = $user->profile;
        $progress = $user->progress()->with('course')->get();
        $achieves = AchieveRepository::getAllAchievements();
        $userAchieves = $user->achievements;

        $settings = $user->settings()->first(UserSettingTypes::getAll())->toArray();

        return view('front.profile.index',
            [
                'user' => $user,
                'news' => $news,
                'profile' => $profile,
                'progress' => $progress,
                'settings' => $settings,
                'achieves' => $achieves,
                'achievements' => $userAchieves,
            ]
        );
    }

    public function updateProfileData(UpdateUserProfileRequest $request, UserProfile $profile)
    {
        $fields = $request->validated();
        $profile->update($fields);
        Alert::set('status', __('vars.profile_was_updated'));

        return redirect()->back();
    }

    public function settings(SettingsRequest $request)
    {
        $settings = $request->safe()->only(UserSettingTypes::getAll());
        Auth::user()->settings->update($settings);

        Alert::set('status', __('vars.settings_were_update'));

        return back();
    }

    public function messages()
    {
        /** @var User $user */
        $user = Auth::user();
        $thread = $user->thread;

        return view('front.chat.chat', [
            'user' => $user,
            'thread' => $thread
        ]);
    }

    public function sendMessage(MessageRequest $request)
    {
        $fields = $request->safe()->only('message');

        /** @var Thread $thread */
        $thread = Auth::user()->thread;
        $thread->messages()->create([
            'message' => $fields['message'],
            'status' => MessageStatuses::UNREAD,
            'owner_id' => Auth::id()
        ]);

        return redirect()->back();
    }
}
