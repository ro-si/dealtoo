<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;


use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ImageController;

// Route::get('/', function () {
//     return view('welcome');
// });



// pour chaque détail article 
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('blog.detail');

Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');



Route::get('/blog', [HomeController::class, 'blog']);

 Route::get('/', [HomeController::class, 'index'])->name('welcome');

// Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');

Route::post('/article', [ArticleController::class, 'store'])->name('article.store');

// Route pour afficher la page de blog
// Route::get('/article', [HomeController::class, 'blog'])->name('blog');

// Route::get('/article', [ArticleController::class, 'index'])->name('blog');




Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);




// // Login route
// Route::post('/login', [LoginController::class, 'store'])->name('login');








// Comment submission route


Route::post('comments', [CommentController::class, 'store'])->name('comment.store');


Route::post('/upload_image', [ImageController::class, 'uploadImage'])->name('image.upload');

use App\Http\Controllers\ApiAuthController;

Route::post('/api/login', [ApiAuthController::class, 'login'])->name('api.login');


// web.php
Route::get('/comments/{articleId}/page/{page}', [CommentController::class, 'loadMore'])->name('comments.loadMore');
