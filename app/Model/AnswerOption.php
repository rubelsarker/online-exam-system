<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AnswerOption extends Model
{
    protected $fillable = ['exam_question_id','option',];
}
