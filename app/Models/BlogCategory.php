<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_categories';
    

    protected $fillable = [
        'name',
        'slug',
        'parent',
        'description',
        'visible_status',
        'image',
        'link',
    ];

    // Parent Category
    public function parentCategory()
    {
        return $this->belongsTo(BlogCategory::class, 'parent');
    }

    // Subcategories
    public function children()
    {
        return $this->hasMany(BlogCategory::class, 'parent');
    }

    // Blogs in this category
    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }
}
