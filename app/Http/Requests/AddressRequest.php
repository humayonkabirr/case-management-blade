<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
    public function rules()
    {
        return [
            'user_id'           => 'required|exists:users,id',
            'division_id'       => 'nullable|exists:divisions,id',
            'district_id'       => 'nullable|exists:districts,id',
            'upazila_id'        => 'nullable|exists:upazilas,id',
            'union_id'          => 'nullable|exists:unions,id',
            'location'          => 'nullable|string|max:255',
            'status'            => 'nullable|in:0,1',  // assuming status can only be 0 or 1
        ];
    }

    /**
     * Get the custom error messages for the validator.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'user_id.required'          => 'The user ID is required.',
            'user_id.exists'            => 'The selected user is invalid.',
            'division_id.exists'        => 'The selected division is invalid.',
            'district_id.exists'        => 'The selected district is invalid.',
            'upazila_id.exists'         => 'The selected upazila is invalid.',
            'union_id.exists'           => 'The selected union is invalid.',
            'location.string'           => 'The location must be a string.',
            'location.max'              => 'The location may not be greater than 255 characters.',
            'status.in'                 => 'The status must be either 0 or 1.',
        ];
    }
}
