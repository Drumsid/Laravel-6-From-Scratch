<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
})->name('about');

Route::get('/articles', 'ArticlesController@index')->name('articles.index');

Route::post('/articles', 'ArticlesController@store')->name('article.store');

Route::get('/articles/create', 'ArticlesController@create')->name('article.create');

Route::get('/articles/{article}', 'ArticlesController@show')->name('article.show');

Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('article.edit');

Route::put('/articles/{article}', 'ArticlesController@update')->name('article.update');



Route::get('/posts/{post}', 'PostsController@show');

Route::get('/test', 'TestsController@index')->name('test.index');
