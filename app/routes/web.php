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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

    $article = App\Article::latest()->get();

    // return $article;
    return view('about',[
        'article' => App\Article::latest()->get(),
    ]);
});

Route::get('/articles','ArticleController@index')->name('article.index');

Route::post('/articles','ArticleController@store');
Route::get('/articles/create','ArticleController@create');

Route::get('/articles/{article}','ArticleController@show')->name('article.show');

Route::get('/articles/{article}/edit','ArticleController@edit');
Route::put('/articles/{article}','ArticleController@update');
// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/',function ()
// {
//     $name = request('name');

//     return view('test',[
//         'name' =>request('name')
//         ]);
// });

// Route::get('/posts/{post}' , function ($post) {
//     $posts = [
//         'my-first-post' => 'hello test',
//         'my-secound-post' => 'hello secound',
//     ];

//     if (! array_key_exists($post,$posts)) {
//         abort(404,'sorry');
//     }

//     return view('post',[
//         'post' => $posts[$post],
//     ]);
// });

Route::get('/posts/{post}','PostsController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
