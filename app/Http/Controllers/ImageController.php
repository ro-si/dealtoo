<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function upload(Request $request)
{
    $request->validate([
        'upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('upload')) {
        $image = $request->file('upload');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);
        $url = asset('uploads/' . $imageName);

        return response()->json([
            'url' => $url,
        ]);
    }
    return response()->json(['error' => 'Image upload failed'], 400);
}
    
}

