<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Post;

class PostsController extends Controller
{
    //


    public function show($slug){

    	// $post = DB::table('posts')->where('slug', $slug)->first();

    	$post = Post::where('slug', $slug)->firstOrFail();

    	// if(!$post){
    	// 	abort(404);
    	// }

    	// dd($post);

		// $posts = [
		// 	'my-first-post' => 'hello, this is my first blog',
		// 	'my-second-post' => 'jaja my second blog'
		// ];


		return view('posts', [
			'post' => $post
		]);



    }
}
