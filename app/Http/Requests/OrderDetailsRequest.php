<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderDetailsRequest extends FormRequest
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
            'order_id' => 'required',
            'product_id' => 'required',
            'quantity' => 'required|min:1000',
            'total' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'order_id.required' => trans('Không được để trống'),
            'product_id.required' => trans('Không được để trống'),
            'quantity.required' => trans('Không được để trống'),
            
        ];
    }
}
