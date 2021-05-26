<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devotion extends Model
{
    use HasFactory;
    protected $fillable = [
        'view_count',
        'title',
        'bible_reading',
        'thumbnail',
        'story',
        'audio',
        'publish',
        'release_date',
    ];
}
