<?php

namespace App\Settings;

use App\Enums\Settings\SettingEnums;
use App\Enums\Settings\UserSettingsTabs;
use App\Enums\Settings\UserSettingTypes;

class UserSettings
{
    public static function getSettings()
    {
        return [
            UserSettingsTabs::COMMON => [
                UserSettingTypes::STATUS => [
                    'type' => SettingEnums::CHECKBOX
                ]
            ],
            UserSettingsTabs::NOTIFICATIONS => [
                UserSettingTypes::GET_NOTIFICATIONS => [
                    'type' => SettingEnums::CHECKBOX
                ],
                UserSettingTypes::GET_NEWS_NOTIFICATIONS => [
                    'type' => SettingEnums::CHECKBOX
                ],
                UserSettingTypes::GET_REVIEW_NOTIFICATIONS => [
                    'type' => SettingEnums::CHECKBOX
                ],
                UserSettingTypes::GET_BLOG_NOTIFICATIONS => [
                    'type' => SettingEnums::CHECKBOX
                ],
            ]
        ];
    }
}
