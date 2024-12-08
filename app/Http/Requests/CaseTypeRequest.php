<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaseTypeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        // You can add your custom authorization logic here.
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $id = $this->route('case_type');  // Get the 'id' from the route

        return [
            'name' => 'required|string|max:255|unique:case_types,name,' . $id,
            'bn_name' => 'nullable|string|max:255|unique:case_types,bn_name,' . $id,
            'serial' => 'nullable|integer|min:1',
            'status' => 'nullable|integer',
        ];
    }

    /**
     * Get the custom validation messages.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required'     => 'The case type name is required.',
            'name.string'       => 'The case type name must be a string.',
            'name.max'          => 'The case type name must not be longer than 255 characters.',
            'name.unique'       => 'The case type name must be unique.',
            'bn_name.string'    => 'The Bengali name must be a string.',
            'bn_name.max'       => 'The Bengali name must not be longer than 255 characters.',
            'bn_name.unique'    => 'The Bengali name must be unique.',
            'serial.integer'    => 'The serial number must be an integer.',
            'serial.min'        => 'The serial number must be at least 1.',
            'status.integer'    => 'The status must be an integer.',
        ];
    }
}
