@extends('layout')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div>
			<ul class="style1">
                @foreach ($tests as $test)
                <li class="first">
				<h3>{{ $test->title }}</h3>
				<br>
					{{-- <p>{{ $test->body }}</p> --}}
				</li>  
                @endforeach
                
            </ul>
            {{ $tests->links() }}
            {{-- настрока пагинации по умолчанию в файле simple-bootstrap-4.blade --}}
		</div>
	</div>
</div>

@endsection
