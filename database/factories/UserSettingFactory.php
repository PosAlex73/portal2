<?php

namespace Database\Factories;

use App\Enums\CommonStatuses;
use App\Enums\Settings\UserSettingTypes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserSetting>
 */
class UserSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            UserSettingTypes::GET_NEWS_NOTIFICATIONS => CommonStatuses::ACTIVE,
            UserSettingTypes::STATUS => CommonStatuses::ACTIVE,
            UserSettingTypes::GET_REVIEW_NOTIFICATIONS => CommonStatuses::ACTIVE,
            UserSettingTypes::GET_BLOG_NOTIFICATIONS => CommonStatuses::ACTIVE,
            UserSettingTypes::GET_NOTIFICATIONS => CommonStatuses::ACTIVE
        ];
    }
}
