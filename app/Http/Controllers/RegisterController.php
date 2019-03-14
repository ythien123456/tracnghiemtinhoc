<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Http\Models\Accounts;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function postRegister(RegisterRequest $request)
    {
        $email = $request->input('Email');
        $password = $request->input('Password');
//        $passwordConfirm = $request->input('PasswordConfirmation');
        $lastName = $request->input('LastName');
        $firstName = $request->input('FirstName');
        $gender = $request->input('Gender');
        $workPlace = $request->input('WorkPlace');
        $phoneNumber = $request->input('PhoneNumber');
        $address = $request->input('Address');
        $registerResult = Accounts::registerAccount($email, md5($password), $firstName, $lastName, $gender, $workPlace, $phoneNumber, $address);
        if ($registerResult == true)
            return redirect('login')
                ->with('registerSubmitMessage', 'Bạn đã đăng ký tài khoản thành công, hãy đăng nhập vào trang web!');
        return redirect('register')
            ->with('registerSubmitMessage', 'Có thể email hoặc số điện thoại đã tồn tại trong hệ thống, vui lòng đăng ký với email hoặc số điện thoại khác!')->withInput();
    }

    public function checkEmail(Request $request)
    {
        $email = $request->input("Email");
        $result = Accounts::checkEmailAvailable($email);
        if (!$result)
            return false;
        return true;
    }
}
