<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoChangeRequest extends FormRequest
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
            'LastName' => 'max:30',
            'FirstName' => 'required|max:30',
            'WorkPlace' => 'max:50',
            'PhoneNumber' => 'nullable|regex:/^[\d\s]*$/|max:13|min:10',
            'Address' => 'max:255'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute bắt buộc nhập',
            'max' => ':attribute không được vượt quá :max ký tự',
            'min' => ':attribute không được ít hơn :min ký tự',
            'regex' => ':attribute không đúng định dạng'
        ];
    }

    public function attributes()
    {
        return [
            'LastName' => 'Họ',
            'FirstName' => 'Tên',
            'WorkPlace' => 'NƠi làm việc/học tập',
            'PhoneNumber' => 'Số điện thoại',
            'Address' => 'Địa chỉ'
        ];
    }
}
