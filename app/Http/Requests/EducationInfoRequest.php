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
            'user_id' => 'required|exists:users,id',
            'institute' => 'required|string|max:255',
            'degree' => 'required|integer',
            'education_level_id' => 'required|exists:education_levels,id',
            'major_subject' => 'nullable|string|max:255',
            'board_university' => 'required|string|max:255',
            'accreditation' => 'nullable|string|max:255',
            'admission_year' => 'nullable|date_format:Y', // Ensures it's a valid year
            'graduation_year' => 'nullable|date_format:Y', // Ensures it's a valid year
            'gpa_cgpa' => 'nullable|numeric|min:0|max:5.00', // Adjust range as necessary
            'honors_awards' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'status' => 'nullable|integer',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'user_id.required' => 'The user ID is required.',
            'user_id.exists' => 'The selected user does not exist.',
            'institute.required' => 'The institute name is required.',
            'degree.required' => 'The degree is required.',
            'education_level_id.required' => 'The education level is required.',
            'education_level_id.exists' => 'The selected education level does not exist.',
            'board_university.required' => 'The board/university name is required.',
            'admission_year.date_format' => 'The admission year must be a valid year.',
            'graduation_year.date_format' => 'The graduation year must be a valid year.',
            'gpa_cgpa.numeric' => 'The GPA/CGPA must be a number.',
            'gpa_cgpa.max' => 'The GPA/CGPA must not exceed 4.00.',
        ];
    }
}
