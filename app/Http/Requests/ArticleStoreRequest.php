<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Consts\Article\ArticleCategoryConst;

class ArticleStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $categoryConsts = [
            ArticleCategoryConst::CATEGORY_ART,
            ArticleCategoryConst::CATEGORY_HISTORY,
            ArticleCategoryConst::CATEGORY_SCIENCE,
            ArticleCategoryConst::NO_CATEGORY,
        ];

        return [
            'title' => ['required', 'max:255'],
            'category' => ['required', Rule::in($categoryConsts)]
        ];
    }
}
