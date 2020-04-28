<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/welcome', function(){

	return view('welcome');

});

Route::get('/about', function(){

	$article = App\Article::latest()->get();

	return view('about', [
		'articles' => App\Article::take(3)->latest()->get()
	]);
	

});
Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');





Route::get('/', function(){

	// $name = request('name');

	// return $name;

	return view('welcome');	

	// return view('test', [
	// 	'name' => request('name')
	// ]);

});


Route::get('/posts/{slug}', 'PostsController@show');


// Route::get('/posts/{post}', function($post){

// 	$posts = [
// 		'my-first-post' => 'hello, this is my first blog',
// 		'my-second-post' => 'jaja my second blog'
// 	];

// 	if (!array_key_exists($post, $posts)){

// 		abort(404, 'wat item not found');
// 	};

// 	return view('posts', [
// 		'post' => $posts[$post]
// 	]);
// });


// Route::get('/test', function(){

// 	return view('test');
// });
