@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection

@section('content')

<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">Update Article</h1>

        <form action="/articles/{{ $article->id }}" method="POST">
            @csrf
            @method('put')

            <div class="field">
                <label class="label" for="title">Title</label>
                <div class="control">
                    <input class="input @error('title') is-danger @enderror" type="text" name="title" id="title" value="{{ $article->title }}">

                    @error('title')
                        <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>
                <div class="control">
                    <textarea class="textarea @error('excerpt') is-danger @enderror" name="excerpt" id="excerpt">{{ $article->excerpt }}</textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>
                <div class="control">
                    <textarea class="textarea @error('body') is-danger @enderror" name="body" id="body">{{ $article->body }}</textarea>
                </div>
            </div>

            <div class="filed is-grouped">
                <div class="control">
                    <button type="submit" class="button is-link">Submit</button>
                </div>
            </div>


        </form>
    </div>
</div>

@endsection
