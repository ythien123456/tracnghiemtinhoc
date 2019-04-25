<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Accounts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        if(!session('AdminID') && !session('AdminLoginAttemps'))
        {
            $request->session()->put('AdminLoginAttemps',0);
            $attemps = session('AdminLoginAttemps');
        }
        $attemps = session('AdminLoginAttemps');
        $email = $request->input('username');
        $password = $request->input('password');
        $admin = Accounts::where('Email', $email)->where('Password', md5($password))->where('Role',3)->first();
        if ($admin) {
            $request->session()->put('AdminLoginAttemps',0);
            $request->session()->put('AdminID', $admin->AccountID);
            $request->session()->put('AdminEmail', $admin->Email);
            return redirect()->route('adminDashboard');
        } else {
            $attemps++;
            $request->session()->put('AdminLoginAttemps',$attemps);
        }
        return back()
            ->with('errMessage', 'Sai thông tin!');
    }

    public function getLogout(Request $request)
    {
        $request->session()->forget('AdminID');
        return redirect()->route('adminLogin');
    }
}
