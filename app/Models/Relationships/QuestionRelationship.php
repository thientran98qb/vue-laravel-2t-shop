<?php

namespace App\Models\Relationships;

use App\Models\Answer;
use App\Models\Quizz;

trait QuestionRelationship {
    public function quizz()
    {
        return $this->belongsTo(Quizz::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
