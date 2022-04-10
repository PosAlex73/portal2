<?php

namespace App\Settings;

use App\Enums\CommonStatuses;
use App\Enums\Langs;
use App\Enums\Settings\SettingEnums;
use App\Enums\Settings\SettingTabs;
use App\Enums\Settings\SettingTypes;

class Settings
{
    public static function getSettings()
    {
        return (object) [
            SettingTabs::COMMON => [

                SettingTypes::LANGUAGE => [
                    'title' => SettingTypes::LANGUAGE,
                    'value' => 'en',
                    'type' => SettingEnums::SELECT,
                    'variants' => Langs::getAll()
                ],
                SettingTypes::SITE_TILE => [
                    'title' => SettingTypes::SITE_TILE,
                    'value' => '',
                    'type' => SettingEnums::INPUT
                ],
                SettingTypes::SITE_DESCRIPTION => [
                    'title' => SettingTypes::SITE_DESCRIPTION,
                    'value' => '',
                    'type' => SettingEnums::TEXTAREA
                ],
                SettingTypes::SITE_ACTIVE => [
                    'title' => SettingTypes::SITE_ACTIVE,
                    'value' => CommonStatuses::ACTIVE,
                    'type' => SettingEnums::SELECT,
                    'variants' => CommonStatuses::getAll()
                ],
                SettingTypes::FRONT_PAGINATION => [
                    'title' => SettingTypes::FRONT_PAGINATION,
                    'value' => 15,
                    'type' => SettingEnums::NUMBER
                ],
                SettingTypes::ADMIN_PAGINATION => [
                    'title' => SettingTypes::ADMIN_PAGINATION,
                    'value' => 15,
                    'type' => SettingEnums::NUMBER
                ],
                SettingTypes::LOGO => [
                    'title' => SettingTypes::LOGO,
                    'value' => '',
                    'type' => SettingEnums::IMAGE
                ]
            ],
            SettingTabs::FRONT_TAB => [
                SettingTypes::SOCIAL_LOGIN => [
                    'title' => SettingTypes::SOCIAL_LOGIN,
                    'value' => 'N',
                    'type' => SettingEnums::CHECKBOX
                ]
            ]
        ];
    }

    public static function getFileTypes()
    {
        return (object) [
            SettingEnums::FILE, SettingEnums::IMAGE
        ];
    }

    public static function getSelectableTypes()
    {
        return (object) [
            SettingEnums::SELECT, SettingEnums::RADIO
        ];
    }

    public static function getFlatSettings()
    {
        $settings = [];
        foreach (self::getSettings() as $tab) {
            $settings = array_merge($settings, array_keys($tab));
        }

        return $settings;
    }
}
