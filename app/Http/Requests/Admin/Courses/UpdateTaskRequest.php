<?php

namespace App\Http\Requests\Admin\Courses;

use App\Enums\CommonStatuses;
use App\Enums\Tasks\TaskTypes;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTaskRequest extends FormRequest
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
            'title' => 'required|min:2|max:255',
            'description' => 'string',
            'status' => ['required', Rule::in(CommonStatuses::getAll())],
            'type' => ['required', Rule::in(TaskTypes::getAll())],
        ];
    }
}
