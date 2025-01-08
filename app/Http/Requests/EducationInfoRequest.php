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
            'institute'             => 'required|string|max:255',
            'degree'                => 'required|string|max:255',
            'education_level_id'    => 'required|exists:education_levels,id',
            'major_subject'         => 'nullable|string|max:255',
            'board_university'      => 'required|string|max:255',
            'accreditation'         => 'nullable|string|max:255',
            'admission_year'        => 'nullable|date_format:Y', // Ensures it's a valid year
            'graduation_year'       => 'nullable|date_format:Y', // Ensures it's a valid year
            'gpa_cgpa'              => 'nullable|numeric|min:0|max:5.00', // Adjust range as necessary
            'honors_awards'         => 'nullable|string|max:255',
            'location'              => 'nullable|string|max:255',
            'status'                => 'nullable|integer',
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
            'institute.required'            => 'The institute name is required.',
            'institute.string'              => 'The institute name must be a string.',
            'institute.max'                 => 'The institute name may not be greater than 255 characters.',

            'degree.required'               => 'The degree is required.',
            'degree.string'                 => 'The degree must be a string.',
            'degree.max'                    => 'The degree may not be greater than 255 characters.',

            'education_level_id.required'   => 'The education level is required.',
            'education_level_id.exists'     => 'The selected education level is invalid.',

            'major_subject.string'          => 'The major subject must be a string.',
            'major_subject.max'             => 'The major subject may not be greater than 255 characters.',

            'board_university.required'     => 'The board/university name is required.',
            'board_university.string'       => 'The board/university name must be a string.',
            'board_university.max'          => 'The board/university name may not be greater than 255 characters.',

            'accreditation.string'          => 'The accreditation must be a string.',
            'accreditation.max'             => 'The accreditation may not be greater than 255 characters.',

            'admission_year.date_format'    => 'The admission year must be a valid year (YYYY).',
            'graduation_year.date_format'   => 'The graduation year must be a valid year (YYYY).',

            'gpa_cgpa.numeric'              => 'The GPA/CGPA must be a number.',
            'gpa_cgpa.min'                  => 'The GPA/CGPA must be at least 0.',
            'gpa_cgpa.max'                  => 'The GPA/CGPA may not be greater than 5.00.',

            'honors_awards.string'          => 'The honors/awards must be a string.',
            'honors_awards.max'             => 'The honors/awards may not be greater than 255 characters.',

            'location.string'               => 'The location must be a string.',
            'location.max'                  => 'The location may not be greater than 255 characters.',

            'status.integer'                => 'The status must be an integer.',
        ];
    }
}
