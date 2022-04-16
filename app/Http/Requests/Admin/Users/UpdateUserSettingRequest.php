<?php

namespace App\Http\Requests\Admin\Users;

use App\Enums\Settings\UserSettingTypes;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserSettingRequest extends FormRequest
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
        return array_fill_keys(UserSettingTypes::getAll(), '');
    }
}
