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
            'division_id'   => 'required|exists:divisions,id',
            'district_id'   => 'required|exists:districts,id',
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
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'name.unique' => 'The name has already been taken. Please choose a different name.',

            'bn_name.string' => 'The Bengali name must be a string.',
            'bn_name.max' => 'The Bengali name may not be greater than 255 characters.',
            'bn_name.unique' => 'The Bengali name has already been taken. Please choose a different name.',

            'division_id.required' => 'The division field is required.',
            'division_id.exists' => 'The selected division does not exist.',

            'district_id.required' => 'The district field is required.',
            'district_id.exists' => 'The selected district does not exist.',

            'location.string' => 'The location must be a string.',
            'location.max' => 'The location may not be greater than 250 characters.',

            'bn_location.string' => 'The Bengali location must be a string.',
            'bn_location.max' => 'The Bengali location may not be greater than 250 characters.',

            'serial.integer' => 'The serial must be a valid integer.',

            'status.required' => 'The status field is required.',
        ];
    }
}
