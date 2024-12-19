<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content',
    ];
    public function commentable()
    {
        return $this->morphTo();
    }
}
