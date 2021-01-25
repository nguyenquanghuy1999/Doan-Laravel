<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
            'name' =>'required|min:10|max:100',
            'price'=>'required',
            'desc'=>'required'
        ];
    }

    public function messages()
    {
        return[
            'name.required' => trans('Tên không được để trống'),
            'name.min' => trans('product.errors.name.min'),
            'name.max' => trans('product.errors.name.max'),
        ];
    }
}
