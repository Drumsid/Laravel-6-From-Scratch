@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h3>New Article</h3>
            <form method="POST" action="{{ route('article.store') }}">
                @csrf
                <div class="form-group">
                    <label for="titleInput">title</label>
                    <input type="text" class="form-control" name="title" id="titleInput">
                </div>
                <div class="form-group">
                    <label for="imgInput">img</label>
                    <input type="textarea" class="form-control" name="img" id="imgInput">
                </div>
                <div class="form-group">
                    <label for="excerptInput">excerpt</label>
                    <input type="textarea" class="form-control" name="excerpt" id="excerptInput">
                </div>
                <div class="form-group">
                    <label for="bodyInput">body</label>
                    <input type="textarea" class="form-control" name="body" id="bodyInput">
                </div>

                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
    </div>
</div>

@endsection
