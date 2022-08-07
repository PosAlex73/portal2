<?php

namespace App\Http\Requests\Admin\Pages;

use App\Enums\Blog\ArticleStatuses;
use App\Enums\Thread\MessageStatuses;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateArticleRequest extends FormRequest
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
            'text' => 'required',
            'status' => ['required', Rule::in(ArticleStatuses::getAll())],
        ];
    }
}
