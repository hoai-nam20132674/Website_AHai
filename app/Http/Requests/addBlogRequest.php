<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addBlogRequest extends FormRequest
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
            
            'url' => 'unique:blogs,url|unique:blog_cates,url|unique:product_cates,url|unique:products,url'
            
            
        ];
    }
    public function messages(){
        return [
            
            'url.unique' => 'Đường dẫn này đã được sử dụng'
            
        ];
    }
}
