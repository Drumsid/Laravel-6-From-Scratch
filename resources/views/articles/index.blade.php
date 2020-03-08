@extends('layout')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div>
			<ul class="style1">
                @forelse ($articles as $article)
                <li class="first">
				<h3><a href="{{ route('article.show', $article) }}">{{ $article->title }}</a></h3>
				<div><img src='{{ asset("images/$article->img") }}' alt="" class="image image-previu" /></div>
				<br>
					<p>{{ $article->excerpt }}</p>
				</li>
				@empty
					<p>Its empty, try again!</p>	
				
                @endforelse
			</ul>
		</div>
	</div>
</div>

@endsection
