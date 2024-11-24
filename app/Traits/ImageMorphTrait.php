<?php

namespace App\Traits;

use App\Models\Image;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait ImageMorphTrait
{
    public function images() : MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function image() : MorphOne
    {
        return $this->morphOne(Image::class, 'imageable')
            ->where('is_active', true);
    }
}
