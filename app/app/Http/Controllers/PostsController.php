<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
class PostsController extends Controller
{
    //
//     public function show($slug)
//     {
//         $posts = [
//         'my-first-post' => 'hello test',
//         'my-secound-post' => 'hello secound',
//     ];

//     $post = \DB::table('posts')->where('slug',$slug)->first();
// dd($post);
//     if (! array_key_exists($post,$posts)) {
//         abort(404,'sorry');
//     }

//     return view('post',[
//         'post' => $posts[$post],
//     ]);
//     }

    public function show($slug)
    {
        // $post = DB::table('posts')->where('slug',$slug)->first();
        // $post = Post::where('slug',$slug)->firstOrfail();

        // if (! $post) {
        //     abort(404);
        // }
        // return view('post',[
        //     'post' => $post,
        // ]);
        return view('post',[
            'post'=>Post::where('slug',$slug)->firstOrfail()
        ]);
    }
}