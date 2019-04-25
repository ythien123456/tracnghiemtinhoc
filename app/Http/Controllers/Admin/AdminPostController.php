<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts');
    }

    public function getPosts()
    {
        $posts = Posts::all();
        foreach ($posts as $p) {
            $p->ModuleID == 1 ? $p->ModuleID = '1 - CNTT' : '';
            $p->ModuleID == 2 ? $p->ModuleID = '2 - HĐH' : '';
            $p->ModuleID == 3 ? $p->ModuleID = '3 - Internet' : '';
            $p->ModuleID == 4 ? $p->ModuleID = '4 - Word' : '';
            $p->ModuleID == 5 ? $p->ModuleID = '5 - Excel' : '';
            $p->ModuleID == 6 ? $p->ModuleID = '6 - Powerpoint' : '';
            $p->ModuleID == 7 ? $p->ModuleID = '7 - Hướng dẫn' : '';
            $p->ModuleID == 8 ? $p->ModuleID = '8 - Tin tức' : '';
            $p->Status == 1 ? $p->Status = '✔️' : $p->Status = '❌';
            $p->PostDate = date('d-m-Y', strtotime($p->PostDate));
        }
        if (request()->ajax()) {
            return datatables()->of($posts)
                ->addColumn('action', function ($posts) {
                    $test = '<button class="btn btn-xs btn-warning btn-edit" name="edit-' . $posts->PostID . '"><i class="glyphicon glyphicon-edit"></i> Sửa</button>
                        <button class="btn btn-xs btn-danger btn-delete" name="delete-' . $posts->PostID . '"><i class="glyphicon glyphicon-trash"></i> Xóa</button>';
                    return $test;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('errors.404');
    }
}
