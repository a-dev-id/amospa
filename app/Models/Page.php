<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sub_title',
        'slug',
        'excerpt',
        'description',
        'term_condition',
        'banner_image',
        'status',
    ];

    public function page_images()
    {
        return $this->hasMany(PageImage::class);
    }
}
