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

    public function store(Request $request)
    {
        $CategoryID = $request->input('category_id');
        $CategoryName = $request->input('category-name');
        $CategoryDescription = $request->input('category-description');
        if(!is_null($CategoryID)) {
            $categoryCheck = PostCategories::where('CategoryName',$CategoryName)->where('CategoryID','<>',$CategoryID)->first();
            if($categoryCheck)
                return response()->json(['message' => 'Tên danh mục bị trùng', 'status' => 0]);
        } else {
            $categoryCheck = PostCategories::where('CategoryName',$CategoryName)->first();
            if($categoryCheck)
                return response()->json(['message' => 'Tên danh mục bị trùng', 'status' => 0]);
        }
        $category = PostCategories::updateOrCreate(
            ['CategoryID' => $CategoryID],
            [
                'CategoryName' => $CategoryName,
                'CategoryDescription' => $CategoryDescription
            ]
        );
        return response()->json($category);
    }

    public function destroy($CategoryID)
    {
        $result = PostCategories::where('CategoryID',$CategoryID)->first()->delete();
        return response()->json($result);
    }
}
