<?php

namespace App\Http\Requests\Admin\Pages;

use App\Enums\Blog\ArticleStatuses;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePageRequest extends FormRequest
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
            'text' => 'required|min:2',
            'status' => ['required', Rule::in(ArticleStatuses::getAll())],
            'url' => 'required',
            'category_id' => 'required'
        ];
    }
}
