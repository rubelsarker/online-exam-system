<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = ['exam_name','department','semester','faculty','course_title',
        'course_code','exam_time','exam_note','exam_rules','exam_description','exam_type','full_marks','random','created_by'];
}
