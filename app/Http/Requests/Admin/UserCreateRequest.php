<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'username' => 'required|unique:users|max:50',
            'email' => 'required|email|unique:users|max:60',
            'password' => 'required|confirmed|min:8|max:25',
            'name' => 'required|max:100',
            'address_id' => 'nullable|exists:addresses,id',
            'phone' => 'nullable|max:20',
        ];
    }
}
