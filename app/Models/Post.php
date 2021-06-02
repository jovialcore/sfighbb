<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'view_count',
        'title',
        'thumbnail',
        'small_thumbnail',
        'story',
        'publish',
    ];

    public function komments() {
        return $this->hasMany(Komment::class)->orderBy('created_at','DESC');
    }
}
