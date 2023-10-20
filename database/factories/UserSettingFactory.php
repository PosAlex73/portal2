<?php

namespace Database\Factories;

use App\Enums\CommonStatuses;
use App\Enums\Settings\UserSettingTypes;
use App\Enums\YesNo;
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
            UserSettingTypes::GET_NEWS_NOTIFICATIONS => YesNo::YES,
            UserSettingTypes::STATUS => YesNo::YES,
            UserSettingTypes::GET_REVIEW_NOTIFICATIONS => YesNo::YES,
            UserSettingTypes::GET_BLOG_NOTIFICATIONS => YesNo::YES,
            UserSettingTypes::GET_NOTIFICATIONS => YesNo::YES
        ];
    }
}
