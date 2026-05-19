<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class storeTaskUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
/**
 * @return array<string, ValidationRule|array<mixed>|string>
 */
public function rules(): array
{
    return [
        'id' => 'required|integer',

        'name' => 'required|string|max:20',

        'email' => 'required|email|unique:users,email',

        'password' => 'required|min:8',

        'role' => 'required|in:admin,user',
        ];
    }
}
