<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsItems extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'published_at', 'is_active'];

    public function categoryData()
    {
        return $this->belongsToMany(Categories::class, 'news_items_categories');
    }

    public function commentsData()
    {
        return $this->hasMany(NewsComment::class, 'news_id', 'id');
    }
}
