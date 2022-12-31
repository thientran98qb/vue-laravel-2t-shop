<?php

namespace App\Models;

use App\Models\Relationships\AnswerRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory, AnswerRelationship;

    protected $fillable = [
        'name',
        'type',
        'question_id'
    ];
}
