<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index($slug) 
    {
    	$post = Post::where('slug', $slug)->firstOrFail();
    	return view('test')->with(['post' => $post->body ]);

    	// return view('test', [
    	// 	'post' => Post::where('slug', $slug)->firstOrFail()->body 
    	// ]);
    }
}
