<?php

namespace App\Http\Controllers;

use App\Http\Models\Modules;
use App\Http\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Posts::getAllPosts();
        if(count($posts->get())<1)
            return view('postList')
                ->with('message','Chưa có bài viết nào!');
        $posts = $posts->paginate(6);
        return view('postList')
            ->with(['posts' => $posts, 'title' => 'Tất cả bài viết']);
    }

    public function show($PostSlug)
    {
        $post = Posts::getPostByPostSlug($PostSlug);
        if (!$post)
            return view('errors.404');
        $postContent = $post->PostContent;
        $postModuleID = $post->ModuleID;
        $relatedPosts = Posts::getRelatedPosts($post->PostID,$postModuleID);
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $postContent, $firstImageUrlInPost);
        $thumbnailUrl = isset($firstImageUrlInPost['src']) ? $firstImageUrlInPost['src'] : url('public/images/modules/'.$postModuleID.'.jpg');
        return view('postContent')
            ->with('post', $post)
            ->with('relatedPosts', $relatedPosts)
            ->with('thumbnail', $thumbnailUrl);
    }

    public function getPostsByModuleID($ModuleID)
    {
        $posts = Posts::getPostsByModuleID($ModuleID);
        $moduleInfo = Modules::getModuleInfo($ModuleID);
        if(count($posts->get())<1)
            return view('postList')
                ->with(['message' => 'Chưa có bài viết nào!', 'title' => $moduleInfo->ModuleName]);
        $posts = $posts->paginate(6);
        return view('postList')
            ->with(['posts' => $posts, 'title' => $moduleInfo->ModuleName]);
    }
}
