<?php

namespace App\Http\Controllers;

use App\Http\Models\Modules;
use App\Http\Models\PostCategories;
use App\Http\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $mostViewed = Posts::getMostViewed(5);
        $posts = Posts::getAllPosts();
        if(count($posts->get())<1)
            return view('postList')
                ->with('message','Chưa có bài viết nào!');
        $posts = $posts->paginate(6);
        return view('postList')
            ->with(['posts' => $posts,
                'title' => 'Tất cả bài viết',
                'mostViewed' => $mostViewed]);
    }

    public function show($PostSlug)
    {
        $mostViewed = Posts::getMostViewed(5);
        $post = Posts::getPostByPostSlug($PostSlug);
        if (!$post)
            return view('errors.404');
        $postCategoryID = $post->CategoryID;
        $relatedPosts = Posts::getRelatedPosts($post->PostID,$postCategoryID);
        return view('postContent')
            ->with('mostViewed',$mostViewed)
            ->with('post', $post)
            ->with('relatedPosts', $relatedPosts);
    }

    public function getPostsByCategoryID($CategoryID)
    {
        $mostViewed = Posts::getMostViewed(5);
        $posts = Posts::getPostsByCategoryID($CategoryID);
        $categoryInfo = PostCategories::find($CategoryID);
        if(count($posts->get())<1)
            return view('postList')
                ->with(['message' => 'Chưa có bài viết nào!',
                    'title' => $categoryInfo->CategoryName,
                    'mostViewed' => $mostViewed]);
        $posts = $posts->paginate(6);
        return view('postList')
            ->with(['posts' => $posts,
                'title' => $categoryInfo->CategoryName,
                'mostViewed' => $mostViewed]);
    }
}
