<?php

namespace App\Http\Requests\Front\Users;

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
            'phone' => 'nullable|integer|max:32',
            'contacted_email' => 'nullable|email',
            'age' => 'nullable|integer|min:15|max:75',
            'country' => [Rule::in(array_keys(Countries::getCountiesList()))],
            'experience' => 'nullable|integer',
            'about' => 'nullable|string'
        ];
    }
}
