<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

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
                    $buttons = '
                        <a href="javascript:void(0)" data-toggle="tooltip" id="delete"  
                        data-id="' . $posts->PostID . '" 
                        data-original-title="Delete" class="btn btn-xs btn-danger btn-delete">
                        <i class="glyphicon glyphicon-trash"></i> Xóa
                        </a>';
                    return $buttons;
                })
                ->addColumn('title', function ($posts) {
                    $title = '<a href="' . route('viewPost', ['PostID' => $posts->PostID]) . '">
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
        return view('errors.404');
    }

    public function showSinglePost($PostID)
    {
        $post = Posts::find($PostID);
        if ($post)
            return view('admin.singlePost')
                ->with([
                    'post' => $post
                ]);
        return view('errors.ad404');
    }

    public function edit()
    {
        $PostID = request()->input('post-id');
        $post = Posts::find($PostID);
        $post->AccountID = request()->input('post-author');
        $post->PostTitle = request()->input('post-title');
        $post->PostSlug = Str::slug($post->PostTitle);
        $post->PostContent = request()->input('post-content');
        $post->ModuleID = request()->input('post-module');
        $post->Status = request()->input('post-status');
        $result = $post->save();
        return response()->json(['result' => $result, 'message' => 'Lưu thành công']);
    }

    public function write()
    {
        return view('admin.writePost');
    }

    public function create(Request $request)
    {
        $PostTitle = $request->input('post-title');
        if (count(Posts::where('PostSlug', Str::slug($PostTitle))->get()) > 0)
            return response()->json(['message' => 'Tên bài viết bị trùng']);
        $post = new Posts;
        $post->PostTitle = $request->input('post-title');
        if(session('AdminID') || session('EditorID')) {
            if(session('AdminID') && session('EditorID'))
                $post->AccountID = session('AdminID');
            else if(session('AdminID'))
                $post->AccountID = session('AdminID');
            else
                $post->AccountID = session('EditorID');
        }
        $post->PostSlug = Str::slug($PostTitle);
        $post->PostContent = $request->input('post-content');
        $post->ModuleID = $request->input('post-module');
        $post->Status = $request->input('post-status');
        if ($post->save())
            return response()->json(['message' => 'Thêm bài viết thành công!','PostID' => $post->PostID]);
    }

    public function destroy($PostID)
    {
        if (request()->ajax()) {
            $post = Posts::find($PostID)->delete();
            return response()->json($post);
        }
        return view('errors.ad404');
    }
}
