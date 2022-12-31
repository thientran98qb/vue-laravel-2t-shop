<?php

namespace App\Models;

use App\Models\Relationships\QuestionRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory, QuestionRelationship;

    protected $fillable = [
        'name',
        'type',
        'quizz_id'
    ];
}
