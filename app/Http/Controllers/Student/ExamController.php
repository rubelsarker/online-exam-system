<?php

namespace App\Http\Controllers\Student;

use App\Model\AnswerOption;
use App\Model\Exam;
use App\Model\Question;
use App\Model\SubmitAns;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Facades\Auth;
use DB;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.myexam');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.myexam');
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
   public function search_exam(){
        return view('student.search_exam');
   }
   public function match(Request $request){
       $key= $request->random;

       $ran = exam::where('random', $request->random)->first();


       if ($ran)
       {
           return redirect::to(url('/student-exam',$ran->id));
       }
       else{
           return 'Your key is not Correct or null';
       }


   }

    public function getExam($exam_id){


        $exam = Exam::where('id',$exam_id)->firstOrFail();
        $questions = Question::where('exam_id',$exam_id)->get();
        return view('student.myexam',compact('exam','questions'));


    }
    public function answersubmit(Request $request){
        $correct = 0;
        $wrong = 0;
        $answerReview = [];
        $answered = count($request->all())>1?true:false;
        $not_answered = count($request->all())>1?0:'All';;
        foreach ($request->all() as $key => $var){
            $question_id = explode('_',$key)[1];
            if($question_id != 'token'){
                $question = Question::where('id',$question_id)->firstOrFail();
                $not_answered = $question->exam_id;
                $answerOption = AnswerOption::where('id',$var)->firstOrFail();
                $answerReview = [
                    'question' => $question->question,
                    'your_answer' => $answerOption->option,
                    'correct_answer' => $question->answer
                ];
                session(['answer_review'=>$answerReview]);
                if($answerOption->option == $question->answer){
                    $correct++;
                }
                elseif($answerOption->option != $question->answer){
                    $wrong++;
                }
                else{
                    $wrong++;
                }
            }
        }
        if($not_answered != 'All'){
            $not_answered = count(Question::where('exam_id',$not_answered)->get());
            $total_answered = count($request->all())-1;
            $not_answered = $not_answered - $total_answered;
        }
        //dd(Auth::user()->id);
        //dd($correct);

        $data=array();
        $data['user_id']=Auth::user()->id;
        $data['name']=Auth::user()->name;
        $data['correct']=$correct;
        $data['wrong']=$wrong;
        DB::table('results')->insert($data);

        return view('student.result',compact('correct','wrong','answerReview','answered','not_answered','exams'));

    }

    public function answer_review(){

        return view('student.answer_review');
    }
}
