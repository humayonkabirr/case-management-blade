<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest; 

class EducationInfoRequest extends FormRequest
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
            // 'user_id' => 'required|exists:users,id',
            'educationInfo.*.institute' => 'required|string|max:255',
            'educationInfo.*.degree' => 'required|string|max:255',
            'educationInfo.*.education_level_id' => 'required|exists:education_levels,id',
            'educationInfo.*.major_subject' => 'nullable|string|max:255',
            'educationInfo.*.board_university' => 'required|string|max:255',
            'educationInfo.*.accreditation' => 'nullable|string|max:255',
            'educationInfo.*.admission_year' => 'nullable|date_format:Y', // Ensures it's a valid year
            'educationInfo.*.graduation_year' => 'nullable|date_format:Y', // Ensures it's a valid year
            'educationInfo.*.gpa_cgpa' => 'nullable|numeric|min:0|max:5.00', // Adjust range as necessary
            'educationInfo.*.honors_awards' => 'nullable|string|max:255',
            'educationInfo.*.location' => 'nullable|string|max:255',
            'educationInfo.*.status' => 'nullable|integer',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            // 'user_id.required' => 'The user ID is required.',
            // 'user_id.exists' => 'The selected user does not exist.',
            'educationInfo.*.institute.required' => 'The institute name is required.',
            'educationInfo.*.degree.required' => 'The degree is required.',
            'educationInfo.*.education_level_id.required' => 'The education level is required.',
            'educationInfo.*.education_level_id.exists' => 'The selected education level does not exist.',
            'educationInfo.*.board_university.required' => 'The board/university name is required.',
            'educationInfo.*.admission_year.date_format' => 'The admission year must be a valid year.',
            'educationInfo.*.graduation_year.date_format' => 'The graduation year must be a valid year.',
            'educationInfo.*.gpa_cgpa.numeric' => 'The GPA/CGPA must be a number.',
            'educationInfo.*.gpa_cgpa.max' => 'The GPA/CGPA must not exceed 4.00.',
        ];
    }
}
