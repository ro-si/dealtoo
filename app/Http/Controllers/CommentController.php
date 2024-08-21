<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment; // Adjust the namespace if necessary

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|string|max:500',
            'article_id' => 'required|integer|exists:article,id',
        ]);
    
        Comment::create([
            'comment' => $request->comment,
            'article_id' => $request->article_id,
            'user_id' => auth()->id(),
            // 'username' => auth()->user()->name, // Store the username if needed
        ]);
    
        return redirect()->route('blog.detail', ['id' => $request->article_id])->with('success', 'Comment posted successfully.');
    }
    
}




