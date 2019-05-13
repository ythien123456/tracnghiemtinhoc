<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Roles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminRoleController extends Controller
{
    public function index()
    {
        return view('admin.roles');
    }

    public function getRoles()
    {
        if(!session('AdminID'))
            return view('errors.ed404');
        $roles = Roles::all();
        if (request()->ajax()) {
            return datatables()->of($roles)
                ->addColumn('action', function ($roles) {
                    $buttons = '<a href="javascript:void(0)" data-toggle="tooltip" id="edit" data-id="' . $roles->RoleID . '" data-original-title="Edit" class="btn btn-xs btn-warning btn-edit"><i class="glyphicon glyphicon-edit"></i> Sửa</a>';
                    return $buttons;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('errors.404');
    }

    public function edit($RoleID)
    {
        $role = Roles::where('RoleID',$RoleID)->first();
        return response()->json($role);
    }

    public function store(Request $request)
    {
        $RoleID = $request->input('role_id');
        $RoleTitle = $request->input('role-title');
        $RoleDescription = $request->input('role-description');
        if(!is_null($RoleID)) {
            $roleCheck = Roles::where('RoleTitle',$RoleTitle)->where('RoleID','<>',$RoleID)->first();
            if($roleCheck)
                return response()->json(['message' => 'Quyền đã bị trùng!', 'status' => 0]);
        } else {
            $roleCheck = Roles::where('RoleTitle',$RoleTitle)->first();
            if($roleCheck)
                return response()->json(['message' => 'Quyền đã bị trùng!', 'status' => 0]);
        }
        $role = Roles::updateOrCreate(
            ['RoleID' => $RoleID],
            [
                'RoleTitle' => $RoleTitle,
                'RoleDescription' => $RoleDescription
            ]
        );
        return response()->json($role);
    }
}
