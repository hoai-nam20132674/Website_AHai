<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editInfoRequest extends FormRequest
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
            
            
            'avata' => 'mimes:jpg,jpeg,png,gif',
            'avata' => 'max:1000000',
            
            
            
        ];
    }
    public function messages(){
        return [
            
            
            'avata.mimes' => 'Chọn ảnh đại diện sai định dạng, vui lòng chọn ảnh Jpg, Jpeg, Png, Gif',
            'avata.max' => 'Dung lượng ảnh đại diện quá lớn vui lòng chọn ảnh dung lượng < 1M',
            
            
        ];
    }
}
