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
            // 'user_id'                            => 'required|exists:users,id',
            'educationInfo.*.institute'             => 'required|string|max:255',
            'educationInfo.*.degree'                => 'required|string|max:255',
            'educationInfo.*.education_level_id'    => 'required|exists:education_levels,id',
            'educationInfo.*.major_subject'         => 'nullable|string|max:255',
            'educationInfo.*.board_university'      => 'required|string|max:255',
            'educationInfo.*.accreditation'         => 'nullable|string|max:255',
            'educationInfo.*.admission_year'        => 'nullable|date_format:Y', // Ensures it's a valid year
            'educationInfo.*.graduation_year'       => 'nullable|date_format:Y', // Ensures it's a valid year
            'educationInfo.*.gpa_cgpa'              => 'nullable|numeric|min:0|max:5.00', // Adjust range as necessary
            'educationInfo.*.honors_awards'         => 'nullable|string|max:255',
            'educationInfo.*.location'              => 'nullable|string|max:255',
            'educationInfo.*.status'                => 'nullable|integer',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            // 'user_id.required'                              => 'The user ID is required.',
            // 'user_id.exists'                                => 'The selected user does not exist.',
            'educationInfo.*.institute.required'            => 'The institute name is required.',
            'educationInfo.*.institute.string'              => 'The institute name must be a string.',
            'educationInfo.*.institute.max'                 => 'The institute name may not be greater than 255 characters.',

            'educationInfo.*.degree.required'               => 'The degree is required.',
            'educationInfo.*.degree.string'                 => 'The degree must be a string.',
            'educationInfo.*.degree.max'                    => 'The degree may not be greater than 255 characters.',

            'educationInfo.*.education_level_id.required'   => 'The education level is required.',
            'educationInfo.*.education_level_id.exists'     => 'The selected education level is invalid.',

            'educationInfo.*.major_subject.string'          => 'The major subject must be a string.',
            'educationInfo.*.major_subject.max'             => 'The major subject may not be greater than 255 characters.',

            'educationInfo.*.board_university.required'     => 'The board/university name is required.',
            'educationInfo.*.board_university.string'       => 'The board/university name must be a string.',
            'educationInfo.*.board_university.max'          => 'The board/university name may not be greater than 255 characters.',

            'educationInfo.*.accreditation.string'          => 'The accreditation must be a string.',
            'educationInfo.*.accreditation.max'             => 'The accreditation may not be greater than 255 characters.',

            'educationInfo.*.admission_year.date_format'    => 'The admission year must be a valid year (YYYY).',
            'educationInfo.*.graduation_year.date_format'   => 'The graduation year must be a valid year (YYYY).',

            'educationInfo.*.gpa_cgpa.numeric'              => 'The GPA/CGPA must be a number.',
            'educationInfo.*.gpa_cgpa.min'                  => 'The GPA/CGPA must be at least 0.',
            'educationInfo.*.gpa_cgpa.max'                  => 'The GPA/CGPA may not be greater than 5.00.',

            'educationInfo.*.honors_awards.string'          => 'The honors/awards must be a string.',
            'educationInfo.*.honors_awards.max'             => 'The honors/awards may not be greater than 255 characters.',

            'educationInfo.*.location.string'               => 'The location must be a string.',
            'educationInfo.*.location.max'                  => 'The location may not be greater than 255 characters.',

            'educationInfo.*.status.integer'                => 'The status must be an integer.',
        ];
    }
}
