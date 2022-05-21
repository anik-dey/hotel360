<?php

namespace App\Http\Requests\Room;

use Illuminate\Foundation\Http\FormRequest;

class PromocodeRequest extends FormRequest
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
            'property_id' =>'required',
            'room_type'=> 'required',
            'start_date'=> 'required|date',
            'end_date'=> 'required|date',
            'code'=> 'required',
            'discount'=> 'required|numeric',

        ];
    }
}
