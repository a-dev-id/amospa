<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_id',
        'title',
        'sub_title',
        'slug',
        'excerpt',
        'description',
        'banner_image',
        'button_title',
        'button_url',
        'status',
    ];

    public function post_images()
    {
        return $this->hasMany(PostImage::class);
    }
}
