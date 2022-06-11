<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function show($post)
    {
        $posts = [
        'my-first-post' => 'hello test',
        'my-secound-post' => 'hello secound',
    ];

    if (! array_key_exists($post,$posts)) {
        abort(404,'sorry');
    }

    return view('post',[
        'post' => $posts[$post],
    ]);
    }
}