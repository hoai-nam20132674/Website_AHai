<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addSliderRequest extends FormRequest
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
            
            'images' => 'mimes:jpg,jpeg,png,gif',
            'images' => 'max:1000000'


        ];
    }
    public function messages(){
        return [
            'images.max' => 'File ảnh quá lớn, vui lòng giảm dung lượng file < 1Mb',
            'images.mimes' => 'Định dạng file upload không đúng vui lòng chọn file ảnh jpg, jpeg, png, gif !'
            
        ];
    }
}
