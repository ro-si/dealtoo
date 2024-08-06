<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Indiquez les attributs qui peuvent être assignés en masse
    protected $fillable = [
        'title',
        'body',
        'category_id',
        'published_at',
        'image', // Ajoutez 'image' ici pour le rendre assignable en masse
    ];

    protected $table = 'article'; // Spécifie explicitement le nom de la table
}
