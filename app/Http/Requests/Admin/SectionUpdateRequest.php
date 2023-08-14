<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SectionUpdateRequest extends FormRequest
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
        // public $translatable = ['title', 'second_title', 'section_content'];

        // protected $fillable = ['title', 'second_title', 'section_content',
        //  'page_id', 'section_order', 'parent_id', 'status', 'url'];

        $sectionId = $this->route('section'); // Assuming your route parameter is named 'section'

        return [
            'title_en' => 'nullable|string',
            'title_ar' => 'nullable|string',
            'second_title_en' => 'nullable|string',
            'second_title_ar' => 'nullable|string',
            'section_content_en' => 'nullable|string',
            'section_content_ar' => 'nullable|string',
        ];
    }
}
