<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    /**
     * Get all of the comment's likes.
     */
    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}
