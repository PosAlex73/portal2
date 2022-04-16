<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\UpdateUserProfileRequest;
use App\Models\User;
use App\Models\UserProfile;

class UserProfileController extends Controller
{
    /**
     * Show the form for editing the specified resource.

     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $profile = $user->profile;

        return view('admin.users.profile', ['user' => $user, 'profile' => $profile]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Users\UpdateUserProfileRequest  $request
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserProfileRequest $request, UserProfile $profile)
    {
        $fields = $request->safe()->only(['phone', 'contacted_email', 'age', 'country', 'experience', 'about']);
        $profile->update($fields);
        session()->flash('status', __('vars.profile_was_updated'));

        return redirect()->back();
    }
}
