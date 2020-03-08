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

			<h4>tags</h4>
			@forelse ($article->tags as $tag)
		<a class="bg-primary text-white" href="/articles?tag={{ $tag->name }}">{{ $tag->name }}</a>
			@empty
				<p>No tags for this</p>
			@endforelse
			<br><br><br>

		<a class = "bg-success text-white" href="{{ route('article.edit', $article) }}">edit</a>
		</div>
	</div>
</div>

@endsection
