<?php

namespace App\Models\Relationships;

use App\Models\Quizz;

trait TagRelationship {
    public function quizzs()
    {
        return $this->morphedByMany(Quizz::class, 'taggable');
    }
}
