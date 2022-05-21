<?php

namespace App\Http\Requests\Human_Resource;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'employee_name'  => 'required',
            'employee_status' => 'required',
            'gender'      => 'required',
            'mobile_number'      => 'required',
            'property_id'      => 'required',
        ];
    }
}
