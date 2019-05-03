<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Accounts;
use App\Http\Models\Scores;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAccountController extends Controller
{
    public function index()
    {
        if(!session('AdminID'))
            return view('errors.ed404');
        return view('admin.accounts');
    }

    public function getAccounts()
    {
        if(!session('AdminID'))
            return view('errors.ed404');
        $accounts = Accounts::all();
        foreach ($accounts as $a) {
            $a->Role == 1 ? $a->Role = '1 - TV' : '';
            $a->Role == 2 ? $a->Role = '2 - BT' : '';
            $a->Role == 3 ? $a->Role = '3 - QT' : '';
            $a->JoinDate = date('d-m-Y', strtotime($a->JoinDate));
        }
        if (request()->ajax()) {
            return datatables()->of($accounts)
                ->addColumn('action', function ($accounts) {
                    $buttons = '<a href="javascript:void(0)" data-toggle="tooltip" id="edit" data-id="' . $accounts->AccountID . '" data-original-title="Edit" class="btn btn-xs btn-warning btn-edit"><i class="glyphicon glyphicon-edit"></i> Sửa</a>
                        <a href="javascript:void(0)" data-toggle="tooltip" id="delete"  data-id="' . $accounts->AccountID . '" data-original-title="Delete" class="btn btn-xs btn-danger btn-delete"><i class="glyphicon glyphicon-trash"></i> Xóa</a>';
                    return $buttons;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('errors.404');
    }

    public function store(Request $request)
    {
        if(!session('AdminID'))
            return view('errors.ed404');
        $AccountID = $request->input('account_id');
        $Email = $request->input('account-email');
        $LastName = $request->input('account-lname');
        $FirstName = $request->input('account-fname');
        $Role = $request->input('account-role');
        $Gender = $request->input('account-gender');
        $WorkPlace = $request->input('account-wplace');
        $PhoneNumber = $request->input('account-phone');
        $Address = $request->input('account-address');
        $account = Accounts::updateOrCreate(
            ['AccountID' => $AccountID],
            [
                'Email' => $Email,
                'LastName' => $LastName,
                'FirstName' => $FirstName,
                'Role' => $Role,
                'Gender' => $Gender,
                'WorkPlace' => $WorkPlace,
                'PhoneNumber' => $PhoneNumber,
                'Address' => $Address,
            ]
        );
        return response()->json($account);
    }

    public function edit($AccountID)
    {
        if(!session('AdminID'))
            return view('errors.ed404');
        if(request()->ajax()) {
            $accountInfo = Accounts::find($AccountID);
            return response()->json($accountInfo);
        }
        return view('errors.ad404');
    }

    public function destroy($AccountID)
    {
        if(!session('AdminID'))
            return view('errors.ed404');
        if(request()->ajax()) {
            Scores::where('AccountID',$AccountID)->delete();
            $deleteResult = Accounts::find($AccountID)->delete();
            return response()->json($deleteResult);
        }
        return view('errors.ad404');
    }

}
