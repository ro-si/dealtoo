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

    public function show($id)
    {
        $category = Category::find($id);
         // 3 articles par page
        $articles = Article::paginate(3)->onEachSide(1);

        // Retrieve the first article to find similar posts
        $article = $category->articles()->first();
        
        // Retrieve similar articles based on the same category
        $similarPosts = Article::where('category_id', $article->category_id)
            ->where('id', '!=', $article->id) // Exclude the current article
            ->take(3) // Limit the number of similar posts
            ->get();

             // Retrieve the most popular posts based on the number of comments
             $popularPosts = Article::withCount('comments')
             ->orderBy('comments_count', 'desc')
             ->take(3) // Limit the number of popular posts
             ->get();

        return view('category.show', compact('category', 'articles', 'similarPosts', 'popularPosts'));
    }
}
