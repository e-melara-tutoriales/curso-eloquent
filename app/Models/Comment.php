<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Traits\ImageMorphTrait;
class Comment extends Model
{
    use HasFactory, ImageMorphTrait;

    public function post() : BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
