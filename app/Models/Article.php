<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'category_id',
        'published_at',
        'image',
    ];

    protected $table = 'article';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getSimilarArticles($limit = 3)
    {
        return self::where('category_id', $this->category_id)
                    ->where('id', '!=', $this->id)
                    ->take($limit)
                    ->get();
    }

}
