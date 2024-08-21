<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommentController;


// Route::get('/', function () {
//     return view('welcome');
// });



// pour chaque détail article 
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('blog.detail');

// liste category
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');


Route::get('/blog', [HomeController::class, 'blog']);

 Route::get('/', [HomeController::class, 'index'])->name('welcome');
 
// Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');

Route::post('/article', [ArticleController::class, 'store'])->name('article.store');

// Route pour afficher la page de blog
// Route::get('/article', [HomeController::class, 'blog'])->name('blog');

// Route::get('/article', [ArticleController::class, 'index'])->name('blog');




// // Registration route
// Route::post('/register', [RegisterController::class, 'store'])->name('register');

// // Login route
// Route::post('/login', [LoginController::class, 'store'])->name('login');




Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::post('logout', [LoginController::class, 'logout'])->name('logout');



// Comment submission route


Route::post('comments', [CommentController::class, 'store'])->name('comment.store');
