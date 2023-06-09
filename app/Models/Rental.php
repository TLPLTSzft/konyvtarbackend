<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'start_date',
        'end_date',
    ];

    protected $visible = [
        'id',
        'book_id',
        'start_date',
        'end_date',
    ];

    protected $hidden = [
        'updated_at',
        'created_at',
    ];
}
