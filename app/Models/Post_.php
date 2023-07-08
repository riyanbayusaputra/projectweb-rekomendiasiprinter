<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [

        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-Post-Pertama",
            "author" => "bayu",
            "body" => "bismillah lamar kamu."
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "Judul-Post-kedua",
            "author" => "dody",
            "body" => "bismillah lamar kamu."
        
        ],
    ];
    public static function all() 
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
      //   $post = [];
    //foreach($posts as $p) {
    //if($p["slug"] === $slug) {
    // $post = $p;
    //}
   // }

    return $posts->firstWhere('slug', $slug);
    }
        
}
