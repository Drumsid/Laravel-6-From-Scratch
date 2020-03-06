@extends('layout')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
            <h2>{{$article->title}}</h2>
			<p>
                <img src='{{ asset("images/$article->img") }}' alt="" class="image image-full" />
			</p>

			<p>{!!$article->body!!}</p>
		<a href="{{ route('article.edit', $article) }}">edit</a>
		</div>
	</div>
</div>

@endsection
