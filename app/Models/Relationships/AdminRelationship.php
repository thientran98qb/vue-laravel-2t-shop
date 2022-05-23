<?php

namespace App\Models\Relationships;

use App\Models\Media;

trait AdminRelationship
{
    public function media()
    {
        return $this->belongsTo(Media::class, 'media_id', 'id');
    }
}
