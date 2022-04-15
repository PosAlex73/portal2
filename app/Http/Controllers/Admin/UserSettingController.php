<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\StoreUserSettingRequest;
use App\Http\Requests\Admin\Users\UpdateUserSettingRequest;
use App\Models\User;
use App\Models\UserSetting;

class UserSettingController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserSetting  $userSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.settings', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Users\UpdateUserSettingRequest  $request
     * @param  \App\Models\UserSetting  $userSetting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserSettingRequest $request, UserSetting $userSetting)
    {
        //
    }
}
