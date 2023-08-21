<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
        return [
            'title_en' => 'required|string|max:150',
            'title_ar' => 'required|string|max:150',
            'short_content_en' => 'required|string|max:250',
            'short_content_ar' => 'required|string|max:250',
            'content_en' => 'required|string',
            'content_ar' => 'required|string',
            'status' => 'required|string',
            'category' => ['nullable', 'exists:categories,id'],
            'tags' => ['nullable', 'array'],
            'tags.*' => ['exists:tags,id'],
            'image' => 'required|file', // Allow jpeg, png, jpg, webp formats
            'image' => 'mimes:jpeg,png,jpg,webp', // Allow jpeg, png, jpg, webp formats
            'image' => 'max:512', // Allow jpeg, png, jpg, webp formats
        ];
    }
}
