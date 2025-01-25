<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
            'user_id'          => 'required|exists:users,id',
            'company_name'        => 'required|string|max:255',
            'job_title'           => 'required|string|max:255', 
            'responsibilities'    => 'nullable|string',
            'start_date'          => 'required|date|before_or_equal:today',
            'end_date'            => 'nullable|date|after:start_date',
            'location'            => 'nullable|string|max:255',
            'is_current'          => 'nullable|boolean',
            'supervisor_name'     => 'nullable|string|max:255',
            'supervisor_mobile'   => 'nullable|string|max:20', // Depending on your validation preference
            'supervisor_email'    => 'nullable|email|max:255',
            'employment_type'     => 'required|string',
            'salary'              => 'nullable|numeric|min:0|max:9999999.99',
            'status'              => 'nullable|integer|in:0,1',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'user_id.required'                          => 'The user ID is required.',
            'user_id.exists'                            => 'The selected user does not exist.',
            'company_name.required'        => 'The company name is required.',
            'job_title.required'           => 'The job title is required.', 
            'start_date.required'          => 'The start date is required.',
            'start_date.before_or_equal'   => 'The start date cannot be in the future.',
            'end_date.after'               => 'The end date must be after the start date.',
            'employment_type'           => 'The employment type must be String.',
            'salary.numeric'               => 'Salary must be a valid number.',
            'salary.min'                   => 'Salary cannot be negative.',
            'salary.max'                   => 'Salary cannot exceed 9,999,999.99.',
        ];
    }
}
