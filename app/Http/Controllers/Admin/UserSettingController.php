<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CommonStatuses;
use App\Enums\Settings\UserSettingTypes;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\StoreUserSettingRequest;
use App\Http\Requests\Admin\Users\UpdateUserSettingRequest;
use App\Models\User;
use App\Models\UserSetting;
use App\Settings\UserSettings;

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
        $settings = $user->settings;
        $user_setting_tabs = UserSettings::getSettings();

        return view('admin.users.settings', [
            'user' => $user,
            'settings' => $settings,
            'user_setting_tabs' => $user_setting_tabs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Users\UpdateUserSettingRequest  $request
     * @param  \App\Models\UserSetting  $userSetting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserSettingRequest $request, UserSetting $user_settings)
    {
        $settings = $request->safe()->only(UserSettingTypes::getAll());
        $settings = array_keys($settings);
        $default_settings = UserSettingTypes::getKeysAsValues();
        $updated_values = [];

        foreach ($default_settings as $setting) {
            in_array($setting, $settings)
                ? $updated_values[$setting] = CommonStatuses::ACTIVE
                : $updated_values[$setting] = CommonStatuses::DISABLED;
        }

        $user_settings->update($updated_values);

        session()->flash('status', __('vars.settings_was_updated'));

        return redirect()->back();
    }
}
