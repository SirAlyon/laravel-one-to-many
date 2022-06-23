<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'cover_image', 'category_id'];

    public function category()
    {
        return $this->belongsto(Category::class);
    }
}
