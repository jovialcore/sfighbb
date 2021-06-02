<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'devotion_id',
        'user_id',
    ];

    public function devotion() {
        return $this->belongsTo(Devotion::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
