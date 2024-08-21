<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment; // Assurez-vous d'importer le modèle Comment



class HomeController extends Controller
{
    // public function detail()
    // {      
    //      // Passer les articles à la vue
    //    return view('partial.detail');
    // }
    
        /**
         * Affiche les détails d'un article spécifique.
         *
         * @param  int  $id
         * @return \Illuminate\View\View
         */
        public function detail($id)
        {
            // Retrieve the current article
            $article = Article::findOrFail($id);
        
            // Retrieve the comments for the current article
            $comments = Comment::where('article_id', $id)->get();
        
            // Retrieve similar articles based on the same category
            $similarPosts = Article::where('category_id', $article->category_id)
                                    ->where('id', '!=', $id) // Exclude the current article
                                    ->take(3) // Limit the number of similar posts
                                    ->get();
        
                    // Retrieve the most popular posts based on the number of comments
                $popularPosts = Article::withCount('comments')
                ->orderBy('comments_count', 'desc')
                ->take(3) // Limit the number of popular posts
                ->get();
        
            // Return the view with the data
            return view('partial.detail', [
                'article' => $article,
                'comments' => $comments,
                'similarPosts' => $similarPosts,
                'popularPosts' => $popularPosts
            ]);
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
         // Retrieve all articles
         $articles = Article::all();
        
         // Retrieve all categories
         $categories = Category::all();
         
         // Retrieve the most commented articles (assuming you want the top 5 most commented articles)
         $mostCommentedArticles = Article::withCount('comments') // Make sure you have a 'comments' relationship in the Article model
                                       ->orderBy('comments_count', 'desc')
                                       ->take(5)
                                       ->get();
 
   
         // Pass the articles, categories, and most commented articles to the view
         return view('welcome', compact('articles', 'categories', 'mostCommentedArticles'));
   
   
    }

}
