<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->input('title_en')),
        ]);
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
            'category' => ['required', 'exists:categories,id'],
            'tags' => ['required', 'array'],
            'tags.*' => ['exists:tags,id'],
            'slug' => 'required|string|unique:blogs,slug',
            'image' => 'required|file', // Allow jpeg, png, jpg, webp formats
            'image' => 'mimes:jpeg,png,jpg,webp', // Allow jpeg, png, jpg, webp formats
            'image' => 'max:512', // Allow jpeg, png, jpg, webp formats
        ];
    }


    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'slug.unique' => 'The slug has already been taken. Please change tag name en',
        ];
    }
}
