<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganizationRequest extends FormRequest
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
    public function rules()
    {
        $id = $this->route('organization');
        
        return [
            'name'          => 'required|string|unique:organizations,name,' . $id,
            'bn_name'       => 'nullable|string|unique:organizations,bn_name,' . $id,
            'type'          => 'required|integer|in:0,1',
            'location'      => 'nullable|string',
            'bn_location'   => 'nullable|string',
            'serial'        => 'nullable|integer|min:1',
            'status'        => 'nullable|integer|in:0,1,2,3,4',
        ];
    }
    public function messages()
    {
        return [
            'name.required'         => 'The name field is required.',
            'name.string'           => 'The name must be a string.',
            'name.unique'           => 'The name has already been taken.',
            'bn_name.string'        => 'The Bangla name must be a string.',
            'bn_name.unique'        => 'The Bangla name has already been taken.',
            'type.required'         => 'The type field is required.',
            'type.integer'          => 'The type must be an integer.',
            'type.in'               => 'The type must be either private (0) or government (1).',
            'location.string'       => 'The location must be a string.',
            'bn_location.string'    => 'The Bangla location must be a string.',
            'serial.integer'        => 'The serial must be an integer.',
            'serial.min'            => 'The serial must be at least 1.',
            'status.integer'        => 'The status must be an integer.',
            'status.in'             => 'The status must be one of the following values: 0 (Inactive), 1 (Active), 2 (Block), 3 (Band), 4 (Suspend).',
        ];
    }
}
