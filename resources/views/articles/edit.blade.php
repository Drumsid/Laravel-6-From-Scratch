@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h3>Update Article</h3>
    <form method="POST" action="/articles/{{ $article->id }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="titleInput">title</label>
                <input type="text" class="form-control {{ $errors->has('title') ? 'border-danger' : ''}}" name="title" id="titleInput" value="{{ $article->title }}">
                @if ($errors->has('title'))
                    <p class="text-danger">{{ $errors->first('title') }}</p>
                @endif
                </div>
                <div class="form-group">
                    <label for="imgInput">img</label>
                    <input type="textarea" class="form-control {{ $errors->has('img') ? 'border-danger' : ''}}" name="img" id="imgInput" value="{{ $article->img }}">
                @if ($errors->has('img'))
                    <p class="text-danger">{{ $errors->first('img') }}</p>
                @endif
                </div>
                <div class="form-group">
                    <label for="excerptInput">excerpt</label>
                    <textarea rows="3" class="form-control {{ $errors->has('excerpt') ? 'border-danger' : ''}}" name="excerpt" id="excerptInput">{{ $article->excerpt }}</textarea>
                @if ($errors->has('excerpt'))
                    <p class="text-danger">{{ $errors->first('excerpt') }}</p>
                @endif
                </div>
                <div class="form-group">
                    <label for="bodyInput">body</label>
                    <textarea rows="3" class="form-control {{ $errors->has('body') ? 'border-danger' : ''}}" name="body" id="bodyInput">{{ $article->body }}</textarea>
                @if ($errors->has('body'))
                    <p class="text-danger">{{ $errors->first('body') }}</p>
                @endif
                </div>

                <button type="submit" class="btn btn-primary">Изменить</button>
            </form>
    </div>
</div>

@endsection
