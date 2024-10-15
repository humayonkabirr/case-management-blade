<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Set this to true to allow the request
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30',
            'username' => 'nullable|string|unique:users,username',
            'mobile' => 'nullable|string|unique:users,mobile',
            'email' => 'required|string|email|max:255|unique:users,email',
            'birthday' => 'nullable|date',
            'blood_group' => 'nullable|string|max:3',
            'religion' => 'nullable|string|max:15',
            'gender' => 'nullable|string|max:10',
            'nationality' => 'nullable|string|max:20',
            'mother_tongue' => 'nullable|string|max:20',
            'avatar' => 'nullable|string',
            'type' => 'nullable|string',
            'password' => 'required|string|min:8',
            'status' => 'nullable|integer|in:0,1',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'first_name.required' => 'First name is required.',
            'first_name.string' => 'First name must be a valid string.',
            'first_name.max' => 'First name cannot exceed 30 characters.',
            'last_name.required' => 'Last name is required.',
            'last_name.string' => 'Last name must be a valid string.',
            'last_name.max' => 'Last name cannot exceed 30 characters.',
            'username.unique' => 'This username is already taken.',
            'mobile.unique' => 'This mobile number is already taken.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Provide a valid email address.',
            'email.unique' => 'This email address is already registered.',
            'birthday.date' => 'Provide a valid date for the birthday.',
            'blood_group.max' => 'Blood group cannot exceed 3 characters.',
            'religion.max' => 'Religion cannot exceed 15 characters.',
            'gender.max' => 'Gender cannot exceed 10 characters.',
            'nationality.max' => 'Nationality cannot exceed 20 characters.',
            'mother_tongue.max' => 'Mother tongue cannot exceed 20 characters.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters long.',
            'status.in' => 'Status must be either 0 (inactive) or 1 (active).',
        ];
    }
}
