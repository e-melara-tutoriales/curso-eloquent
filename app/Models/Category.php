<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Category extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function posts() : HasMany
    {
        return $this->hasMany(Post::class);
    }


    public function comments() : HasManyThrough
    {
        return $this->hasManyThrough(Comment::class, Post::class);
    }
}
