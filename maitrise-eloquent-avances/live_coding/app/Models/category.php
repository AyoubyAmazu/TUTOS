<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        'name',
    ];
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
