<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{
    public function getIndex(){
    	// $posts = Post::orderBy('id','desc')->paginate(10);
    	// return view('blog.index')->withPosts($posts);

        $search = \Request::get('search');
        $posts = Post::where('title', 'like','%'.$search.'%')->orderBy('id', 'desc')->paginate(3);


        return view('blog.index')->withPosts($posts);

    }
    public function getSingle($slug){
    	// fetch from db based on slug
    	$post = Post::where('slug', '=', $slug) -> first();

    	// return the view and pass in the post object
    	return view('blog.single')->withPost($post);
    }

   
}
