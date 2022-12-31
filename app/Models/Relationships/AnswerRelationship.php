<?php

namespace App\Models\Relationships;

use App\Models\Question;

trait AnswerRelationship {
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
