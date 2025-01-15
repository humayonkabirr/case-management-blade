<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaseInfoRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'case_type_id'      => 'required|exists:case_types,id',
            'court_id'          => 'required|exists:courts,id',
            'advocate_id'       => 'required|exists:users,id',
            'created_by'        => 'required|exists:users,id',
            'title'             => 'required|string|max:255',
            'bn_title'          => 'nullable|string|max:255',
            'case_no'           => 'nullable|string|max:100',
            'tender_no'         => 'nullable|string|max:100',
            'priority'          => 'nullable|string|in:low,medium,high',
            'state'             => 'nullable|string|max:100',
            'serial'            => 'nullable|integer|min:1',
            'status'            => 'nullable|integer|in:0,1,2,3,4',
        ];
    }

    /**
     * Get the custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'case_type_id.required'     => 'The case type is required.',
            'case_type_id.exists'       => 'The selected case type is invalid.',
            'court_id.required'         => 'The court is required.',
            'court_id.exists'           => 'The selected court is invalid.',
            'advocate_id.required'      => 'The advocate is required.',
            'advocate_id.exists'        => 'The selected advocate is invalid.',
            'created_by.required'       => 'The creator information is required.',
            'created_by.exists'         => 'The creator information is invalid.',
            'title.required'            => 'The title is required.',
            'title.max'                 => 'The title must not exceed 255 characters.',
            'bn_title.max'              => 'The Bengali title must not exceed 255 characters.',
            'case_no.max'               => 'The case number must not exceed 100 characters.',
            'tender_no.max'             => 'The tender number must not exceed 100 characters.',
            'priority.in'               => 'The priority must be one of: low, medium, high.',
            'serial.integer'            => 'The serial must be a valid integer.',
            'serial.min'                => 'The serial must be at least 1.',
            'status.in'                 => 'The status must be one of: 0 (Inactive), 1 (Active), 2 (Block), 3 (Band), 4 (Suspend).',
        ];
    }
}
