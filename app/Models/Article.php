<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'tittle',
        'description',
        'content',
        'user_id',
        'category_id',
        'published_at',

    ];
}
