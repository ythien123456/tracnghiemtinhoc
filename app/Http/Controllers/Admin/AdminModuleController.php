<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Modules;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminModuleController extends Controller
{
    public function index()
    {
        return view('admin.modules');
    }

    public function getModules()
    {
        if(!session('AdminID'))
            return view('errors.ed404');
        $modules = Modules::all();
        if (request()->ajax()) {
            return datatables()->of($modules)
                ->addColumn('action', function ($modules) {
                    $buttons = '<a href="javascript:void(0)" data-toggle="tooltip" id="edit" data-id="' . $modules->ModuleID . '" data-original-title="Edit" class="btn btn-xs btn-warning btn-edit"><i class="glyphicon glyphicon-edit"></i> Sửa</a>';
                    return $buttons;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('errors.404');
    }

    public function edit($ModuleID)
    {
        if(request()->ajax()) {
            $module = Modules::where('ModuleID',$ModuleID)->first();
            return response()->json($module);
        }
        return view('errors.ad404');
    }

    public function store(Request $request)
    {
        $ModuleID  = $request->input('module_id');
        $ModuleName = $request->input('module-name');
        $ModuleDescription = $request->input('module-description');
        $module = Modules::updateOrCreate(
            ['ModuleID' => $ModuleID],
            [
                'ModuleName' => $ModuleName,
                'ModuleDescription' => $ModuleDescription
            ]
        );
        return response()->json($module);
    }
}
