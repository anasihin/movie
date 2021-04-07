<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mov extends Model
{
    use HasFactory;

    protected $table = 'movie';

    protected $fillable = [
        'title',
        'description',
        'duration',
        'artist',
        'genres',
        'watchUrl',
    ];
}
