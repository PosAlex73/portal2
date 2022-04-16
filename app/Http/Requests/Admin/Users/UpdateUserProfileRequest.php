<?php

namespace App\Http\Requests\Admin\Users;

use App\Utils\Countries;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserProfileRequest extends FormRequest
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
        return [
            'phone' => '',
            'contacted_email' => 'nullable|email',
            'age' => 'integer',
            'country' => [Rule::in(array_keys(Countries::getCountiesList()))],
            'experience' => 'integer',
            'about' => ''
        ];
    }
}
