<?php

namespace App\Http\Requests\Admin;

use App\Enums\CommonStatuses;
use App\Enums\ImageTypes;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ImageRequest extends FormRequest
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
            'title' => 'required',
            'path' => 'required',
            'status' => ['required', Rule::in(CommonStatuses::getAll())],
            'type' => ['required', Rule::in(ImageTypes::getAll())]
        ];
    }
}
