<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest; 

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Set this to true to allow the request
        return true;
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
            'birthday' => 'required|date',
            'blood_group' => 'required|string|max:3',
            'religion' => 'required|string|max:15',
            'gender' => 'required|string|max:10',
            'nationality' => 'required|string|max:20',
            'mother_tongue' => 'required|string|max:20',
            'avatar' => 'nullable|string',
            'type' => 'nullable|string',
            'password' => 'nullable|string|min:8',
            'status' => 'nullable|integer|in:0,1',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'first_name.required' => 'First name is required and cannot be empty.',
        'first_name.string' => 'First name must be a valid string.',
        'first_name.max' => 'First name cannot exceed 30 characters.',

        'last_name.required' => 'Last name is required and cannot be empty.',
        'last_name.string' => 'Last name must be a valid string.',
        'last_name.max' => 'Last name cannot exceed 30 characters.',

        'username.string' => 'Username must be a valid string.',
        'username.unique' => 'This username is already taken.',

        'mobile.string' => 'Mobile number must be a valid string.',
        'mobile.unique' => 'This mobile number is already registered.',

        'email.required' => 'Email is required and cannot be empty.',
        'email.string' => 'Email must be a valid string.',
        'email.email' => 'Please provide a valid email address.',
        'email.max' => 'Email cannot exceed 255 characters.',
        'email.unique' => 'This email is already in use.',

        'birthday.required' => 'Birthday is required.',
        'birthday.date' => 'Please provide a valid date for the birthday.',

        'blood_group.required' => 'Blood group is required.',
        'blood_group.string' => 'Blood group must be a valid string.',
        'blood_group.max' => 'Blood group cannot exceed 3 characters.',

        'religion.required' => 'Religion is required.',
        'religion.string' => 'Religion must be a valid string.',
        'religion.max' => 'Religion cannot exceed 15 characters.',

        'gender.required' => 'Gender is required.',
        'gender.string' => 'Gender must be a valid string.',
        'gender.max' => 'Gender cannot exceed 10 characters.',

        'nationality.required' => 'Nationality is required.',
        'nationality.string' => 'Nationality must be a valid string.',
        'nationality.max' => 'Nationality cannot exceed 20 characters.',

        'mother_tongue.required' => 'Mother tongue is required.',
        'mother_tongue.string' => 'Mother tongue must be a valid string.',
        'mother_tongue.max' => 'Mother tongue cannot exceed 20 characters.',

        'avatar.string' => 'Avatar must be a valid string.',

        'type.string' => 'Type must be a valid string.',

        'password.required' => 'Password is required and cannot be empty.',
        'password.string' => 'Password must be a valid string.',
        'password.min' => 'Password must be at least 8 characters long.',

        'status.integer' => 'Status must be either 0 (inactive) or 1 (active).',
        'status.in' => 'Invalid status value provided.'
        ];
    }
}
