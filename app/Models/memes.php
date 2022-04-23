<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memes extends Model
{
    use  HasFactory;
    protected $fillable = [
        'name',
        'genre',
        'joke'
    ];
}