<?php

namespace App\Http\Requests\Admin\Commercial;

use App\Enums\Orders\Payments;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOrderRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'payment' => ['required', Rule::in(Payments::getAll())],
            'course' => 'required|exists:practice_courses,id'
        ];
    }
}
