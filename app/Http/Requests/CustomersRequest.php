<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomersRequest extends FormRequest
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
            'name' => 'required|max:100',
            'address' => 'required',
            'email' => 'required|email',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Không được để trống',
            'name.max' => 'tên không quá 100 kí tự',
            'address.required' => 'Không được để trống',
            'email.required' => 'Không được để trống',
            'email.email' => 'Sai định dạng, phải là ...@gmail.com',
        ];
    }
}
