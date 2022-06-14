@extends('layout')
@section('content')
<div id="wrapper">
	<div id="page" class="container">
        @foreach($article as $article)
            	<div id="content">
			<div class="title">
				<h2>
                    <a href="{{ route('article.show',$article->id) }}">
                        {{ $article->title }}
                    </a>
                </h2>
			</div>
			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
			<p>{{ $article->body }}</p>
		</div>
        @endforeach
	</div>
</div>
@endsection
