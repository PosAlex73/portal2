<?php

namespace App\Http\Controllers\Front;

use App\Enums\CommonStatuses;
use App\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Users\UpdateUserProfileRequest;
use App\Http\Requests\Front\Users\UpdateUserRequest;
use App\Models\AppNew;
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
        $courses = $user->courses;

        return view('front.profile.index',
            ['user' => $user, 'news' => $news, 'profile' => $profile, 'courses' => $courses, ]
        );
    }

    public function profileData(UserProfile $profile)
    {
        return view('front.profile.profile', ['profile' => $profile]);
    }

    public function updateProfileData(UpdateUserProfileRequest $request, UserProfile $profile)
    {
        $fields = $request->only(['phone', 'contacted_email', 'age', 'country', 'experience', 'about']);
        $profile->update($fields);
        Alert::set('status', __('vars.profile_was_updated'));

        return redirect()->back();
    }

    public function updateUserData(UpdateUserRequest $request, User $user)
    {
        $fields = $request->safe()->only(['first_name', 'last_name', 'email']);
        $user->update($fields);
        Alert::set('status', __('vars.user_was_updated'));

        return redirect()->back();
    }

    public function settings()
    {
        return view('front.profile.settings');
    }

    public function messages()
    {

    }
}
