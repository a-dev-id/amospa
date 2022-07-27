<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'gofood_title',
        'gofood_logo',
        'gofood_description',
        'gofood_button_text',
        'gofood_button_link',
        'gofood_banner',
        'gofood_banner_link',
        'news_informations_title',
        'news_informations_description',
        'homepage_video_url',
        'instagram_url',
        'facebook_url',
        'youtube_url',
        'tripadvisor_url',
        'google_url',
        'spa_service_excerpt',
        'spa_service_description',
    ];
}
