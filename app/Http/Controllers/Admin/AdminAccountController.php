<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Accounts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAccountController extends Controller
{
    public function index()
    {
        return view('admin.accounts');
    }

    public function getAccounts()
    {
        $accounts = Accounts::all();
        foreach ($accounts as $a) {
            $a->Role == 1 ? $a->Role = '1 - TV' : '';
            $a->Role == 2 ? $a->Role = '2 - BT' : '';
            $a->Role == 3 ? $a->Role = '3 - QT' : '';
            $a->JoinDate = date('d-m-Y', strtotime($a->JoinDate));
        }
        if (request()->ajax()) {
            return datatables()->of($accounts)
                ->addColumn('action', function ($questions) {
                    $test = '<button class="btn btn-xs btn-warning btn-edit" name="edit-' . $questions->QuestionID . '"><i class="glyphicon glyphicon-edit"></i> Sửa</button>
                        <button class="btn btn-xs btn-danger btn-delete" name="delete-' . $questions->QuestionID . '"><i class="glyphicon glyphicon-trash"></i> Xóa</button>';
                    return $test;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('errors.404');
    }

}
