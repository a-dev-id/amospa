<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'banner_image',
        'status',
    ];
}
