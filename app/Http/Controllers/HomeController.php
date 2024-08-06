<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function blog()
    {
        
        // Récupérer tous les articles
        $articles = Article::all();
        
        // Passer les articles à la vue
        return view('partial.blog', compact('articles'));
    }
}
