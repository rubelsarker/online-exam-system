<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['exam_id','question','answer',];
    public function option()
    {
        return AnswerOption::all()->where('exam_question_id','=',$this->id);
    }
}
