<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmergencyContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'user_id'       => 'nullable|exists:users,id',
            'first_name'    => 'required|string|max:255',
            'last_name'     => 'nullable|string|max:255',
            'relationship'  => 'required|string|max:100',
            'mobile'        => 'required|string|max:15|regex:/^[0-9+\-\(\) ]+$/',
            'gender'        => 'required|in:Male,Female,Other',
            'email'         => 'nullable|email|max:255',
            'address'       => 'nullable|string|max:255',
            'status'        => 'nullable|integer|in:0,1',
        ];
    }

    /**
     * Get the custom messages for validation errors.
     */
    public function messages()
    {
        return [
            'user_id.nullable'      => 'User ID is required.',
            'user_id.exists'        => 'The selected user ID does not exist.',
            'first_name.required'   => 'First name is required.',
            'first_name.string'     => 'First name must be a string.',
            'first_name.max'        => 'First name cannot exceed 255 characters.',
            'last_name.string'      => 'Last name must be a string.',
            'last_name.max'         => 'Last name cannot exceed 255 characters.',
            'relationship.required' => 'Relationship is required.',
            'relationship.string'   => 'Relationship must be a string.',
            'relationship.max'      => 'Relationship cannot exceed 100 characters.',
            'mobile.required'       => 'Mobile number is required.',
            'mobile.string'         => 'Mobile number must be a string.',
            'mobile.max'            => 'Mobile number cannot exceed 15 characters.',
            'mobile.regex'          => 'Mobile number contains invalid characters.',
            'gender.required'       => 'Gender is required.',
            'gender.in'             => 'Gender must be either Male, Female, or Other.',
            'email.email'           => 'Email must be a valid email address.',
            'email.max'             => 'Email cannot exceed 255 characters.',
            'address.string'        => 'Address must be a string.',
            'address.max'           => 'Address cannot exceed 255 characters.',
            'status.integer'        => 'Status must be an integer.',
            'status.in'             => 'Status must be either 0 or 1.',
        ];
    }
}
