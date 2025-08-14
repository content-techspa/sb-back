<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    protected $table = 'blog_comments';


    protected $fillable = [
        'user_id',
        'blog_id',
        'name',
        'email',
        'website',
        'mobile',
        'comment',
        'status',
        'created_at',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }
}
