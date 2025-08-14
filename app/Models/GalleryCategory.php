<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    protected $fillable = ['name', 'cover_image'];

    public function images()
    {
        return $this->hasMany(GalleryImage::class, 'category_id');
    }
}
