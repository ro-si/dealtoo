<?php

// app/Http/Controllers/CategoryController.php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->back()->with('success', 'Catégorie ajoutée avec succès.');
    }

    // public function show($id)
    // {
    //     $category = Category::find($id);
    //      // 3 articles par page
    //     $articles = Article::paginate(3)->onEachSide(1);

    //     // Retrieve the first article to find similar posts
    //     $article = $category->articles()->first();
        
    //     // Retrieve similar articles based on the same category
    //     $similarPosts = Article::where('category_id', $article->category_id)
    //         ->where('id', '!=', $article->id) // Exclude the current article
    //         ->take(3) // Limit the number of similar posts
    //         ->get();

    //          // Retrieve the most popular posts based on the number of comments
    //          $popularPosts = Article::withCount('comments')
    //          ->orderBy('comments_count', 'desc')
    //          ->take(3) // Limit the number of popular posts
    //          ->get();

    //     return view('category.show', compact('category', 'articles', 'similarPosts', 'popularPosts'));
    // }

    public function show($id)
    {
        // Trouver la catégorie par ID
        $category = Category::findOrFail($id);
    
        // Récupérer les articles de cette catégorie spécifique avec pagination
        $articles = $category->articles()->paginate(3);
    
        // Exclure l'ID des articles actuels si plusieurs articles sont exclus
        $articleIds = $articles->pluck('id')->toArray();
    
        // Récupérer les articles similaires basés sur la même catégorie
        $similarPosts = Article::where('category_id', $category->id)
            ->whereNotIn('id', $articleIds)
            ->take(3)
            ->get();

    //          // Récupérer les articles similaires basés sur la même catégorie (3 articles par défaut)
    // $similarPosts = Article::getSimilarArticles($category->id, $articleIds, 4);  // Spécifier 4 ici

    
        // Récupérer les articles les plus populaires basés sur le nombre de commentaires
        $popularPosts = Article::withCount('comments')
            ->orderBy('comments_count', 'desc')
            ->take(3)
            ->get();
    
        // Retourner la vue avec les données
        return view('category.show', compact('category', 'articles', 'similarPosts', 'popularPosts'));
    }
    

}


