<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addCardRequest extends FormRequest
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
            
            'code' => 'unique:cards,code'
            
            
        ];
    }
    public function messages(){
        return [
            'code.unique' => 'Mã thẻ này đã được sử dụng'
            
        ];
    }
}
