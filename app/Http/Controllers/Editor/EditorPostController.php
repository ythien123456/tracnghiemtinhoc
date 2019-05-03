<?php

namespace App\Http\Controllers\Editor;

use App\Http\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class EditorPostController extends Controller
{
    public function index()
    {
        return view('editor.posts');
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
                    $buttons = '
                        <a href="javascript:void(0)" data-toggle="tooltip" id="delete"  
                        data-id="' . $posts->PostID . '" 
                        data-original-title="Delete" class="btn btn-xs btn-danger btn-delete">
                        <i class="glyphicon glyphicon-trash"></i> Xóa
                        </a>';
                    return $buttons;
                })
                ->addColumn('title', function ($posts) {
                    $title = '<a href="' . route('editorViewPost', ['PostID' => $posts->PostID]) . '">
                    ' . $posts->PostTitle . '</a>';
                    return $title;
                })
                ->addColumn('status', function ($posts) {
                    $status = ''.$posts->Status;
                    return $status;
                })
                ->rawColumns(['action', 'title','status'])
                ->make(true);
        }
        return view('errors.ed404');
    }

    public function showSinglePost($PostID)
    {
        $post = Posts::find($PostID);
        if ($post)
            return view('editor.singlePost')
                ->with([
                    'post' => $post
                ]);
        return view('errors.ed404');
    }

    public function write()
    {
        return view('editor.writePost');
    }

}
