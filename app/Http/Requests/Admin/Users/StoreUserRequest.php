<?php

namespace App\Http\Requests\Admin\Users;

use App\Enums\Users\UserStatuses;
use App\Enums\Users\UserTypes;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'type' => ['required', Rule::in(UserTypes::getAll())],
            'status' => ['required', Rule::in(UserStatuses::getAll())],
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ];
    }
}
