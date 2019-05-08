<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Modules;
use App\Http\Models\PostCategories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories');
    }

    public function getCategories()
    {
        if(!session('AdminID'))
            return view('errors.ed404');
        $categories = PostCategories::all();
        if (request()->ajax()) {
            return datatables()->of($categories)
                ->addColumn('action', function ($categories) {
                    $buttons = '<a href="javascript:void(0)" data-toggle="tooltip" id="edit" data-id="' . $categories->CategoryID . '" data-original-title="Edit" class="btn btn-xs btn-warning btn-edit"><i class="glyphicon glyphicon-edit"></i> Sửa</a>
                                <a href="javascript:void(0)" data-toggle="tooltip" id="delete" data-id="' . $categories->CategoryID . '" data-original-title="Delete" class="btn btn-xs btn-danger btn-delete"><i class="glyphicon glyphicon-trash"></i> Xóa</a>';
                    return $buttons;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('errors.404');
    }

    public function edit($CategoryID)
    {
        if(request()->ajax()) {
            $category = PostCategories::where('CategoryID',$CategoryID)->first();
            return response()->json($category);
        }
        return view('errors.ad404');
    }

    public function test()
    {
        return 'asd';
    }
}
