<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Traits\ImageMorphTrait;

class Post extends Model
{
    use HasFactory, ImageMorphTrait;

    protected $guarded = [];

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class)->withDefault([
            'name' => 'Uncategorized'
        ]);
    }

    public function comments() : HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(Tag::class)
            ->withTimestamps()
            ->using(PostTag::class)
            ->as('post_tag')
            ->withPivot('additional_column', 'tagged_at');
    }
}
