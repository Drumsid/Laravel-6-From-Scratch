<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('articles.index', [
            'articles' => $articles
        ]);
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'img' => 'required',
            'excerpt' => ['required', 'min:10', 'max:255'],
            'body' => ['required', 'min:10'],
        ]);

        $article = new Article();

        $article->title = request('title');
        $article->img = request('img');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect()->route('articles.index');
    }
    public function edit($id)
    {
        $article = Article::find($id);

        return view('articles.edit', compact('article'));
    }

    public function update($article)
    {
        request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'img' => 'required',
            'excerpt' => ['required', 'min:10', 'max:255'],
            'body' => ['required', 'min:10'],
        ]);

        $article = Article::find($article);

        $article->title = request('title');
        $article->img = request('img');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect(route('article.show', $article));
    }
}
