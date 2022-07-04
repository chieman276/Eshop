<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_phone' => 'required',
            'customer_password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'customer_name.required' => 'Vui lòng nhập tên khách hàng',
            'customer_email.required' => 'Vui lòng nhập email khách hàng',
            'customer_phone.required' => 'Vui lòng nhập số điện thoại khách hàng',
            'customer_password.required' => 'Vui lòng nhập mật khẩu khách hàng',

        ];
    }
}
