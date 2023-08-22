<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreCategoryRequest extends FormRequest
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
            'slug' => Str::slug($this->input('category_name_en')),
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
            'category_name_en' => 'required|string|max:150',
            'category_name_ar' => 'required|string|max:150',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'short_description_en' => 'required|string|max:150',
            'short_description_ar' => 'required|string|max:150',
            'status' => 'required|string',
            'parent_id' => 'nullable|exists:tags,id',
            'slug' => 'required|string|unique:tags,slug',
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
