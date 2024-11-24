<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PostTag extends Pivot
{
    public function casts() : array
    {
        return [
            'tagged_at' => 'datetime',
        ];
    }
}
