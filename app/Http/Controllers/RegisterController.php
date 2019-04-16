<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Http\Models\Accounts;

class RegisterController extends Controller
{
    public function showRegister()
    {
        if(session('Email'))
            return redirect(route('home'));
        return view('register')
            ->with('pageName','ĐĂNG KÝ');
    }

    public function postRegister(RegisterRequest $request)
    {
        $email = $request->input('Email');
        $password = $request->input('Password');
//        $passwordConfirm = $request->input('PasswordConfirmation');
        $firstName = $request->input('FirstName');
        $registerResult = Accounts::store($email, md5($password), $firstName);
        if ($registerResult == true)
            return redirect(route('login'))
                ->with('registerSubmitMessage', 'Bạn đã đăng ký tài khoản thành công, hãy đăng nhập vào trang web!');
        return redirect(route('register'))
            ->with('registerSubmitMessage', 'Email đã tồn tại trong hệ thống!')->withInput();
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
