<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

class PostController extends Controller
{
    public function index()
    {
        $title ='';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title =' garansi ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = 'by' . $author->name;
        }

        return view('posts',  [

            "title" => "Rekomendasi Printer" .$title,
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
     {
        return view('post',[
            "title" => "Single post",
            "active" => "All posts",
            "post" => $post
    
        ]);
    
    }
}
