<?php

namespace App\Http\Requests\Front\Users;

use App\Enums\CommonStatuses;
use App\Enums\Settings\UserSettingTypes;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        foreach(UserSettingTypes::getAll() as $setting) {
            $result[$setting] = [Rule::in(CommonStatuses::getAll())];
        }

        return $result;
    }
}
