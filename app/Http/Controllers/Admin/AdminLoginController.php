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
        $email = $request->input('username');
        $password = $request->input('password');
        $admin = Accounts::where('Email', $email)->where('Password', md5($password))->where('Role',3)->first();
        if ($admin) {
            $request->session()->put('AdminID', $admin->AccountID);
            $request->session()->put('AdminEmail', $admin->Email);
            return redirect()->route('adminDashboard');
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
