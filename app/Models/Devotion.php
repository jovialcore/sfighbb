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
        'smaller_thumbnail',
        'small_thumbnail',
        'story',
        'audio',
        'publish',
        'release_date',
    ];

    public function comments() {
        return $this->hasMany(Comment::class)->orderBy('created_at','DESC');
    }
}
