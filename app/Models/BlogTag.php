<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    protected $table = 'blog_tags';
    

    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
    ];

    // Blogs under this tag
    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_blog_tag', 'blog_tag_id', 'blog_id');
    }
}
