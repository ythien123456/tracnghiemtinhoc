<?php

namespace App\Http\Controllers\Editor;

use App\Http\Models\Accounts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditorLoginController extends Controller
{
    public function index()
    {
        return view('editor.login');
    }

    public function postLogin(Request $request)
    {
        $Email = $request->input('username');
        $Password = md5($request->input('password'));
        $account = Accounts::where('Email', $Email)
            ->where('Password', $Password)
            ->where('Role','>=',2)
            ->first();
        if (!is_null($account)) {
            $request->session()->put('EditorID', $account->AccountID);
            $request->session()->put('EditorEmail', $account->Email);
            return redirect()->route('editorExams');
        } else {
            return back()
                ->with(['errMessage' => 'Sai tên đăng nhập hoặc mật khẩu']);
        }
    }

    public function getLogout(Request $request)
    {
        $request->session()->forget('EditorID');
        return redirect()->route('editorLogin');
    }
}
