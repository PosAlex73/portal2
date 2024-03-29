<?php

namespace App\Settings;

use App\Enums\CommonStatuses;
use App\Enums\Langs;
use App\Enums\Settings\SettingEnums;
use App\Enums\Settings\SettingTabs;
use App\Enums\Settings\SettingTypes;
use App\Enums\YesNo;

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
                SettingTypes::MAIN_HERO => [
                    'title' => SettingTypes::MAIN_HERO,
                    'value' => '',
                    'type' => SettingEnums::RICH_TEXT
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
                ],
                SettingTypes::SHOW_ARTICLE_RATING => [
                    'title' => SettingTypes::SHOW_ARTICLE_RATING,
                    'value' => YesNo::YES,
                    'type' => SettingEnums::CHECKBOX
                ]
            ],
            SettingTabs::FRONT_TAB => [
                SettingTypes::SOCIAL_LOGIN => [
                    'title' => SettingTypes::SOCIAL_LOGIN,
                    'value' => YesNo::YES,
                    'type' => SettingEnums::CHECKBOX
                ],
                SettingTypes::SIGNED_REGISTRATION => [
                    'title' => SettingTypes::SIGNED_REGISTRATION,
                    'value' => YesNo::NO,
                    'type' => SettingEnums::CHECKBOX
                ]
            ],
            SettingTabs::SYSTEM_TAB => [
                SettingTypes::LOGGING_ENABLED => [
                    'title' => SettingTypes::LOGGING_ENABLED,
                    'value' => YesNo::YES,
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
