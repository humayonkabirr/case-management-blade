<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationLevelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'level'         => 'required|string|max:50|unique:education_levels,level',
            'bn_level'      => 'required|string|max:50|unique:education_levels,bn_level',
            'status'        => 'required|integer|in:0,1'
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'level.required'    => 'The education level in English is required.',
            'level.string'      => 'The education level in English must be a valid string.',
            'level.max'         => 'The education level in English may not be greater than 50 characters.',
            'level.unique'      => 'This education level in English already exists.',

            'bn_level.required' => 'The education level in Bangla is required.',
            'bn_level.string'   => 'The education level in Bangla must be a valid string.',
            'bn_level.max'      => 'The education level in Bangla may not be greater than 50 characters.',
            'bn_level.unique'   => 'This education level in Bangla already exists.',

            'status.required'   => 'The status is required.',
            'status.integer'    => 'The status must be a valid integer.',
            'status.in'         => 'The status must be either active (1) or inactive (0).',
        ];
    }
}
