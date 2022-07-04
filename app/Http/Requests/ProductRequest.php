<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name'=> 'required',
            'product_image'=> 'required',
            'product_price'=> 'required',
            'product_quantity'=> 'required',
            'product_descript'=> 'required',
            'category_id'=> 'required',
            
        ];
    }

    public function messages()
    {
        return [
            'product_name.required' => 'Vui lòng nhập tên sản phẩm',
            'product_image.required' => 'Vui lòng gắn ảnh',
            'product_price.required' => 'Vui lòng nhập giá sản phẩm',
            'product_quantity.required' => 'Vui lòng nhập số lượng sản phẩm',
            'product_descript.required' => 'Vui lòng nhập chi tiết sản phẩm',
            'category_id.required' => 'Vui lòng nhập Dang mục sản phẩm',
           
        


        ];
    }
}
