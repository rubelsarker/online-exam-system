<?php

namespace App\Http\Controllers\Teacher;

use App\Model\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Exam;
use App\Model\AnswerOption;
use Gate;
use Session;

class QuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }
    public function setQuestion($id)
    {
        $exam = Exam::where('id',$id)->firstOrFail();
        return view('teacher.question.setquestion',compact('exam'));

    }

    public function addQuestion(Request $request,$id)
    {
        $exam_id = $request->exam_id;
        $ques = $request->input('ques');

        foreach ($ques as $que)
        {
            $question = Question::create(['exam_id'=>$id,'question'=>$que['question'],'answer'=>$que['answer']]);
            if ($que['option1'])
            {
                $option = AnswerOption::create(['exam_question_id'=>$question->id,'option'=>$que['option1']]);
            }
            if ($que['option2'])
            {
                $option = AnswerOption::create(['exam_question_id'=>$question->id,'option'=>$que['option2']]);
            }
            if ($que['option3'])
            {
                $option = AnswerOption::create(['exam_question_id'=>$question->id,'option'=>$que['option3']]);
            }
            if ($que['option4'])
            {
                $option = AnswerOption::create(['exam_question_id'=>$question->id,'option'=>$que['option4']]);
            }

        }

        return back();
//        dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
