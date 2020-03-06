@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h3>New Article</h3>
            <form method="POST" action="{{ route('article.store') }}">
                @csrf
                <div class="form-group">
                    <label for="titleInput">title</label>
                <input 
                    type="text" 
                    class="form-control {{ $errors->has('title') ? 'border-danger' : ''}}" 
                    name="title" 
                    id="titleInput"
                    value="{{ old('title') }}">

                @if ($errors->has('title'))
                    <p class="text-danger">{{ $errors->first('title') }}</p>
                @endif
                </div>

                <div class="form-group">
                    <label for="imgInput">img</label>
                    <input 
                        type="textarea" 
                        class="form-control @error('img') border-danger @enderror" 
                        name="img" 
                        id="imgInput"
                        value="{{ old('img') }}">

                    @error('img')
                        <p class="text-danger">{{ $errors->first('img') }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="excerptInput">excerpt</label>
                    <textarea 
                        rows="3" 
                        class="form-control {{ $errors->has('excerpt') ? 'border-danger' : ''}}" 
                        name="excerpt" 
                        id="excerptInput">{{ old('excerpt') }}</textarea>

                    @if ($errors->has('excerpt'))
                        <p class="text-danger">{{ $errors->first('excerpt') }}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label for="bodyInput">body</label>
                    <textarea 
                        rows="3" 
                        class="form-control {{ $errors->has('body') ? 'border-danger' : ''}}" 
                        name="body" 
                        id="bodyInput">{{ old('body') }}</textarea>

                    @if ($errors->has('body'))
                        <p class="text-danger">{{ $errors->first('body') }}</p>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
    </div>
</div>

@endsection
