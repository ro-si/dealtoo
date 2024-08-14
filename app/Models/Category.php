<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Indiquez les attributs qui peuvent être assignés en masse
    protected $fillable = [
        'name',
    ];

    // Spécifiez le nom de la table si nécessaire
    protected $table = 'categories'; // Nom de la table
    // Category.php

public function articles()
{
    return $this->hasMany(Article::class);
}

}
