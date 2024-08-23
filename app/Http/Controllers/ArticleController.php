<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function store(Request $request)
    {

        // dd($request->all());
        // Valider les données du formulaire
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'category_id' => 'required|exists:categories,id', // Accepter les catégories comme chaînes de caractères
            'published_at' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // Validation pour l'image
        ]);

        // Gérer le téléchargement de l'image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('assets', $imageName); // Stocker l'image dans le dossier 'public/images'
        }
        // dd($request->input('body'));
        // Créer un nouvel article
        Article::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),

            'category_id' => $request->input('category_id'), // Stocker la catégorie comme texte
            'published_at' => $request->input('published_at'),
            'image' => $imageName, // Enregistrer le chemin de l'image
        ]);

        // Rediriger avec un message de succès
        return redirect()->route('welcome')->with('success', 'Article ajouté avec succès.');
    }
  public function upImage(Request $request) {
    
  }
    public function index()
    {
        // Récupère toutes les catégories avec leurs articles associés
        $categories = Category::with('articles')->get();

        // Retourne la vue 'welcome' avec les catégories
        return view('welcome', compact('categories'));
    }
}
