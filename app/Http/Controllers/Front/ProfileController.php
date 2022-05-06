<?php

namespace App\Http\Controllers\Front;

use App\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Users\UpdateUserProfileRequest;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user();

        return view('front.profile.index', ['user' => $user]);
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
}
