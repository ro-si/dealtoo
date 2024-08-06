<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');


// Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');

Route::post('/article', [ArticleController::class, 'store'])->name('article.store');
// Route pour afficher la page de blog
// Route::get('/article', [HomeController::class, 'blog'])->name('blog');

// Route::get('/article', [ArticleController::class, 'index'])->name('blog');

