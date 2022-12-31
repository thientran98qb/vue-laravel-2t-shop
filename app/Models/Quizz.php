<?php

namespace App\Models;

use App\Models\Relationships\QuizzRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizz extends Model
{
    use HasFactory, QuizzRelationship;

    protected $fillable = [
        'title'
    ];
}
