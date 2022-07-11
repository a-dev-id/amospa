<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_uid',
        'image',
    ];

    public function product()
    {
        return $this->belongsTo('App\Post', 'post_id');
    }
}
