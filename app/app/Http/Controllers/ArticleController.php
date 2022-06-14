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
        //show a single resource

        $article = Article::find($id);
        // dd($article);
        // dd($articleId);
        return view('article.show',[
            'article' => $article,
        ]);
    }

    public function create()
    {
        // shows a view to create a new resource

        return view('article.create');
    }

    public function store()
    {
        //persist the new resource
        // dump(request()->all());

        request()->validate([
            'title' => ['required','min:3','max:255'],
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $article = new Article();
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');
    }

    public function edit($id)
    {
        // show a view to edit an exisiting resource

        $article = Article::find($id);

        return view('article.edit',[
            'article' => $article,
        ]);
    }

    public function update($id)
    {
        // persist the resource

        request()->validate([
            'title' => ['required','min:3','max:255'],
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $article = Article::find($id);
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles/' . $article->id);

    }

    public function destroy()
    {
        // delete the resource

    }
}