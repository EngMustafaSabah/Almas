<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
        $userId = $this->route('user'); // Assuming you use 'user' as the route parameter for the user ID

        return [
            'username' => 'required|unique:users,username,' . $userId . '|max:255',
            'email' => 'required|email|unique:users,email,' . $userId . '|max:255',
            'password' => 'nullable|min:8',
            'name' => 'required|max:255',
            'address_id' => 'nullable|exists:addresses,id',
            'phone' => 'nullable|max:20',
        ];
    }
}
