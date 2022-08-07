<?php

namespace App\Http\Requests\Admin;

use App\Enums\CommonStatuses;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTestQuestionRequest extends FormRequest
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
            'questions' => 'string',
            'right_answer' => 'integer',
            'status' => [Rule::in(CommonStatuses::getAll())],
            'practice_task' => 'exists:practice_tasks,id'
        ];
    }
}
