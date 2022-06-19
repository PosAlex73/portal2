<?php

namespace App\Http\Requests\Front\Orders;

use App\Enums\Orders\OrderTypes;
use App\Rules\UserHasCourse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NewOrderRequest extends FormRequest
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
            'type' => [Rule::in(OrderTypes::getAll()), 'required'],
            'id' => ['required', 'integer', new UserHasCourse()]
        ];
    }
}
