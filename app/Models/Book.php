<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'publish_year',
        'page_count',
    ];

    protected $visible = [
        'id',
        'title',
        'author',
        'publish_year',
        'page_count',
    ];

    protected $hidden = [
        'updated_at',
        'created_at',
    ];
}
