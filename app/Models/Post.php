<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'images1',
        'images2',
        'images3',
        'images4',
        'images5',
        'images6',
        'event',
        'tiket',
        'jadwal',
    ];
}
