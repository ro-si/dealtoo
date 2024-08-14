<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
class HomeController extends Controller
{
    // public function detail()
    // {      
    //      // Passer les articles à la vue
    //     return view('partial.detail');
    // }
    public function detail($id)
    {
        // Récupère l'article correspondant à l'identifiant
        $article = Article::findOrFail($id);
    
        // Passer l'article à la vue
        return view('partial.detail', compact('article'));
    }
  
 


    

    public function blog()
    {
        
        // // Récupérer tous les articles
        // $articles = Article::all();
        
        // // Passer les articles à la vue
        //  return view('partial.blog', compact('articles'));
        return view('partial.blog');
    }

    public function index()
    {
        $articles = Article::all(); // Récupère tous les articles
        $categories = Category::all(); // Récupère toutes les catégories
        
        return view('welcome', compact('articles', 'categories')); // Passe les articles et les catégories à la vue welcome
    }
}
