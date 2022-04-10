<?php

namespace App\Http\Requests\Admin\Courses;

use App\Enums\Courses\CourseStatuses;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCourseRequest extends FormRequest
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
            'description' => 'required',
            'short_description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'status' => ['required', Rule::in(CourseStatuses::getAll())]
        ];
    }
}
