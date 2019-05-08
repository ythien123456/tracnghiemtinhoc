<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Posts extends Model
{
    protected $primaryKey = 'PostID';
    public $timestamps = false;
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
            ->select('PostTitle',DB::raw('SUBSTRING(PostContent,1,150) as PostContent'),'PostSlug','CategoryID','Thumbnail')
            ->where('Status','=',1)
            ->orderBy('PostDate','desc');
        return $posts;
    }

    public static function getPostByPostSlug($postSlug)
    {
        if(count(Posts::where('PostSlug',$postSlug)->where('Status',1)->get())>0) {
            $post = DB::table('posts as p')
                ->join('accounts as a', 'p.AccountID', '=', 'a.AccountID')
                ->select('a.FirstName', 'a.LastName', 'p.PostID', 'p.CategoryID', 'p.PostTitle', 'p.PostContent', 'p.PostSlug',
                    DB::raw('DATE(p.PostDate) as PostDate'), 'p.Views','p.Thumbnail')
                ->where('p.PostSlug', '=', $postSlug)
                ->where('Status','=',1)
                ->first();
            DB::table('posts')
                ->where('PostSlug','=',$postSlug)
                ->update(['Views' => ++$post->Views]);
            return $post;
        }
        return null;
    }

    public static function getRelatedPosts($PostID,$CategoryID)
    {
        $relatedPosts = DB::table('posts')
            ->select('PostTitle',DB::raw('SUBSTRING(PostContent,1,150) as PostContent'),
                'PostContent as PostFullContent','PostSlug','CategoryID','Thumbnail')
            ->where('CategoryID','=',$CategoryID)
            ->where('PostID','<>',$PostID)
            ->where('Status','=',1)
            ->inRandomOrder()
            ->limit(5)
            ->get();
        return $relatedPosts;
    }

    public static function getPostsByCategoryID($Category)
    {
        $posts = DB::table('posts')
            ->select('PostTitle',DB::raw('SUBSTRING(PostContent,1,150) as PostContent'),
                'PostContent as PostFullContent','PostSlug','CategoryID','Thumbnail')
            ->where('CategoryID','=',$Category)
            ->where('Status','=',1);
        return $posts;
    }

    public static function getMostViewed($totalPosts)
    {
        $posts = DB::table('posts')
            ->where('Status','=',1)
            ->orderByDesc('Views')
            ->limit($totalPosts)
            ->get();
        return $posts;
    }
}
