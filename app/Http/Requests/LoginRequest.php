<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'Email' => 'required|max:255|min:5',
            'Password' => 'required|min:5|max:255'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để rỗng',
            'max' => ':attribute không được vượt quá :max ký tự',
            'min' => ':attribute không được ít hơn :min ký tự'
        ];
    }

    public function attributes()
    {
        return [
            'Email' => 'Email',
            'Password' => 'Mật khẩu'
        ];
    }
}
