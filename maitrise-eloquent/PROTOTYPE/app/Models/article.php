<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;
    
    protected $fillable = ['nom','categorie_id'];

    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
}