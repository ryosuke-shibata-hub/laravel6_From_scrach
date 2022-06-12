<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;


class ArticleController extends Controller
{
    //

    public function index()
    {
        $article = Article::latest()->get();

        return view('article.index',[
            'article' => $article,
        ]);
    }
    public function show($id)
    {
        $article = Article::find($id);
        // dd($article);
        // dd($articleId);
        return view('article.show',[
            'article' => $article,
        ]);
    }
}