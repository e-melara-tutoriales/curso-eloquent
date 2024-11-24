<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Traits\ImageMorphTrait;

class Profile extends Model
{
    use HasFactory, ImageMorphTrait;

    protected $guarded = [];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault([
            'bio' => 'No bio provided'
        ]);
    }
}
