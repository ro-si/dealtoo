<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function store(Request $request)
    {

        
        $request->validate([
            'comment' => 'required|string|max:500',
            'article_id' => 'required|integer|exists:article,id',
        ]);

        // Récupération du nom d'utilisateur depuis la session
        $username = Session::get('user.name');

        Comment::create([
            'comment' => $request->comment,
            'article_id' => $request->article_id,
            'user_id' => auth()->id(),
            'username' => $username, // Stocker le nom d'utilisateur
        ]);

        return redirect()->route('blog.detail', ['id' => $request->article_id])
            ->with('success', 'Commentaire posté avec succès.');
    }


 

}
