<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'Password' => 'required|min:5|max:255',
            'PasswordConfirmation' => 'required|same:Password',
            'LastName' => 'max:30',
            'FirstName' => 'required|max:30',
            'WorkPlace' => 'max:50',
            'PhoneNumber' => 'min:9|max:13|regex:/[0-9]{9,13}/',
            'Address' => 'max:255'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute bắt buộc nhập',
            'max' => ':attribute không được vượt quá :max ký tự',
            'min' => ':attribute không được ít hơn :min ký tự',
            'same' => 'Mật khẩu xác nhận không trùng khớp!'
        ];
    }

    public function attributes()
    {
        return [
            'Email' => 'Email',
            'Password' => 'Mật khẩu',
            'LastName' => 'Họ',
            'FirstName' => 'Tên',
            'WorkPlace' => 'NƠi làm việc/học tập',
            'PhoneNumber' => 'Số điện thoại',
            'Address' => 'Địa chỉ'
        ];
    }
}
