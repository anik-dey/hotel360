<?php

namespace App\Http\Requests\Configuration\PaymentSettings;

use Illuminate\Foundation\Http\FormRequest;

class PaymentSettingsRequest extends FormRequest
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
            'property_id'=>'required',
            'name'=> 'required',
            'api'=>'required',
        ];
    }
}
