<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        Article::create($this->validateArticle());

        return redirect()->route('articles.index');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        $article->update($this->validateArticle());

        return redirect(route('article.show', $article));
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'img' => 'required',
            'excerpt' => ['required', 'min:10', 'max:255'],
            'body' => ['required', 'min:10'],
        ]);
    }
}
