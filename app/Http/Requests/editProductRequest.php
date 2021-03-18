<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editProductRequest extends FormRequest
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
            
            'url' => 'unique:blog_cates,url|unique:product_cates,url|unique:blogs,url|unique:products,url,'.$this->id,
            'avata' => 'mimes:jpg,jpeg,png,gif',
            'avata' => 'max:1000000',
            'images' => 'mimes:jpg,jpeg,png,gif',
            'images' => 'max:1000000'

            
            
        ];
    }
    public function messages(){
        return [
            
            'url.unique' => 'Đường dẫn này đã được sử dụng',
            'avata.mimes' => 'Chọn ảnh đại diện sai định dạng, vui lòng chọn ảnh Jpg, Jpeg, Png, Gif',
            'avata.max' => 'Dung lượng ảnh đại diện quá lớn vui lòng chọn ảnh dung lượng < 1M',
            'images.mimes' => 'Chọn ảnh chi tiết sai định dạng, vui lòng chọn ảnh Jpg, Jpeg, Png, Gif',
            'images.max' => 'Dung lượng ảnh chi tiết quá lớn vui lòng chọn ảnh dung lượng < 1M',
            
        ];
    }
}
