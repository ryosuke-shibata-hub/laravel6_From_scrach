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
    public function show(Article $article)
    {
        //show a single resource

        // $article = Article::findOrfail($id);
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


        // $article = new Article();
        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');
        //  $article->save();

        // Article::create( request()->validate([
        //     'title' => ['required','min:3','max:255'],
        //     'excerpt' => 'required',
        //     'body' => 'required',
        // ]));

        Article::create($this->validateArticle());

        return redirect(route('article.index'));
    }

    public function edit(Article $article)
    {
        // show a view to edit an exisiting resource

        // $article = Article::find($id);

        return view('article.edit',[
            'article' => $article,
        ]);
    }

    public function update(Article $article)
    {
        // persist the resource

        // request()->validate([
        //     'title' => ['required','min:3','max:255'],
        //     'excerpt' => 'required',
        //     'body' => 'required',
        // ]);

        // $article = Article::find($id);
        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');

        // $article->save();
        $article->update($this->validateArticle());

        return redirect(route('article.show',$article));

    }

    public function destroy()
    {
        // delete the resource

    }

    protected function validateArticle() {

        return request()->validate([
            'title' => ['required','min:3','max:255'],
            'excerpt' => 'required',
            'body' => 'required',
        ]);
    }
}