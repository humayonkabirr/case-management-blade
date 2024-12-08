<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourtRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // You can change this if you have authorization logic
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->route('court');  // Get the 'id' from the route

        return [
            'name'          => 'required|string|max:255|unique:courts,name,' . $id,
            'bn_name'       => 'nullable|string|max:255|unique:courts,bn_name,' . $id,
            'division_id'   => 'nullable|exists:divisions,id',
            'district_id'   => 'nullable|exists:districts,id',
            'location'      => 'nullable|string|max:250',
            'bn_location'   => 'nullable|string|max:250',
            'serial'        => 'nullable|integer',
            'status'        => 'nullable',
        ];
    }

    /**
     * Get custom error messages for validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'     => 'The court name is required.',
            'name.unique'       => 'The court name must be unique.',
            'status.in'         => 'The status must be either Active (1) or Inactive (0).',
        ];
    }
}
