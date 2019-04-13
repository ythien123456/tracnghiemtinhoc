<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Posts extends Model
{
    public function modules()
    {
        return $this->belongsTo('App\Http\Models\Modules');
    }

    public function accounts()
    {
        return $this->belongsTo('App\Http\Models\Accounts');
    }

    public static function getAllPosts()
    {
        $posts = DB::table('posts')
            ->select('PostTitle',DB::raw('SUBSTRING(PostContent,1,150) as PostContent'),'PostSlug','ModuleID')
            ->orderBy('PostDate','desc');
        return $posts;
    }

    public static function getPostByPostSlug($postSlug)
    {
        $post = DB::table('posts as p')
            ->join('accounts as a', 'p.AccountID', '=', 'a.AccountID')
            ->select('a.FirstName', 'a.LastName', 'p.PostID', 'p.ModuleID', 'p.PostTitle', 'p.PostContent', 'p.PostSlug',
                DB::raw('DATE(p.PostDate) as PostDate'), 'p.ModuleID','p.Views')
            ->where('p.PostSlug', '=', $postSlug)
            ->first();
        DB::table('posts')
            ->where('PostSlug','=',$postSlug)
            ->update(['Views' => ++$post->Views]);
        return $post;
    }

    public static function getRelatedPosts($PostID,$ModuleID)
    {
        $relatedPosts = DB::table('posts')
            ->select('PostTitle',DB::raw('SUBSTRING(PostContent,1,150) as PostContent'), 'PostContent as PostFullContent','PostSlug','ModuleID')
            ->where('ModuleID','=',$ModuleID)
            ->where('PostID','<>',$PostID)
            ->inRandomOrder()
            ->limit(5)
            ->get();
        return $relatedPosts;
    }

    public static function getPostsByModuleID($ModuleID)
    {
        $posts = DB::table('posts')
            ->select('PostTitle',DB::raw('SUBSTRING(PostContent,1,150) as PostContent'), 'PostContent as PostFullContent','PostSlug','ModuleID')
            ->where('ModuleID','=',$ModuleID);
        return $posts;
    }
}