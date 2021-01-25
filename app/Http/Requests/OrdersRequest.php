<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'customer_id' => 'required',
            'order_date' => 'required',
            'address' => 'required',
            'total' => 'required',
            'note' => 'required',
            'user_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'customer_id.required' => 'Không được để trống',
            'order_date.required' => 'Không được để trống',
            'address.required' => 'Không được để trống',
            'total.required' => 'Không được để trống',
            'note.required' => 'Không được để trống',
            'user_id.required' =>'Không được để trống',


        ];
    }
}
