<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_id',
        'post_uid',
        'title',
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
        return $this->hasMany('App\PostImage', 'post_id');
    }
}
