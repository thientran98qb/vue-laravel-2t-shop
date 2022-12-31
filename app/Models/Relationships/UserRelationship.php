<?php

namespace App\Models\Relationships;

use App\Models\Quizz;

trait UserRelationship {
    public function quizzs()
    {
        return $this->belongsToMany(Quizz::class)->withPivot('score', 'time_up');
    }
}
