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
}
