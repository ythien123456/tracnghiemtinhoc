<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'CurrentPassword' => 'required|min:5|max:255',
            'NewPassword' => 'required|min:5|max:255',
            'NewPasswordConfirm' => 'same:NewPassword'
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
            'CurrentPassword' => 'Mật khẩu hiện tại',
            'NewPassword' => 'Mật khẩu mới',
            'NewPasswordConfirm' => 'Xác nhận mật khẩu mới'
        ];
    }
}
