<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    
    protected $fillable = [
        'title',
        'slug',
        'small_description',
        'description',
        'featured_image',
        'category_id',
        'page_title',
        'page_keyword',
        'page_description',
        'allow_comments',
        'visibility',
    ];

    // Category (one-to-many)
    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }

    // Tags (many-to-many) – make sure you have a pivot table 'blog_blog_tag' or name it appropriately
    public function tags()
    {
        return $this->belongsToMany(BlogTag::class, 'blog_blog_tag', 'blog_id', 'blog_tag_id');
    }

    // Comments (one-to-many)
    public function comments()
    {
        return $this->hasMany(BlogComment::class, 'blog_id');
    }
}
