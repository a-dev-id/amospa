<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'homepage_video_url',
        'instagram_url',
        'facebook_url',
        'youtube_url',
        'tripadvisor_url',
    ];
}
