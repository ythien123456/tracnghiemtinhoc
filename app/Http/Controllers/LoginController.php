<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Models\Accounts;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login')
            ->with('pageName','ĐĂNG NHẬP');
    }

    public function postLogin(LoginRequest $request)
    {
        $email = $request->input('Email');
        $password = $request->input('Password');
        $hashedPassword = md5($password);
        $user = Accounts::getSingleAccount($email, $hashedPassword);
        if (!empty($user)) {
            $request->session()->put('AccountID', $user->AccountID);
            $request->session()->put('Email', $user->Email);
            $request->session()->put('Role', $user->Role);
            $request->session()->put('FirstName', $user->FirstName);
            $request->session()->put('LastName', $user->LastName);
            return redirect(route('home'));
        } else {
            return view('login')
                ->with('queryError','Sai tên đăng nhập hoặc mật khẩu!');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect(redirect()->getUrlGenerator()->previous());
    }
}
