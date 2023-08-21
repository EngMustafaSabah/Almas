<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\DifferentId;

class UpdateTagRequest extends FormRequest
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
            'tag_name_en' => 'required|string|max:150',
            'tag_name_ar' => 'required|string|max:150',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'short_description_en' => 'required|string|max:150',
            'short_description_ar' => 'required|string|max:150',
            'status' => 'required|string',
            'parent_id' => ['nullable', 'exists:tags,id', new DifferentId(request('tagid'))],
        ];
    }
}
