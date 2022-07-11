<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaCategoryImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'spa_category_id',
        'image',
    ];
}
