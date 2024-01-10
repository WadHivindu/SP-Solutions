<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = ['title','description'];

    public function newsItems()
    {
        return $this->belongsToMany(NewsItems::class, 'news_items_categories');
    }
}
