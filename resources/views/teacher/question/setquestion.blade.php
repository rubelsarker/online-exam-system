@extends('layouts.main')
@section('title')
    | Set question
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption box-header bg-blue ">
                        Set Question
                    </div>
                </div>
                <div class="portlet light bordered" id="form_wizard_1">
                    <div class="portlet-body form">
                        <form class="form-horizontal" action="{{url('add-question').'/'.$exam->id}}" id="submit_form" method="POST">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="form-wizard">
                                <div class="form-body">
                                    <div class="text-center" style="margin-top:20px; ">
                                        <img src="{{url('')}}/AdminLTE/dist/img/diu.png"  alt="User Image">
                                        <h4><span>Department of </span>
                                            @if($exam->department==1){
                                            <span>CSE</span>}
                                            @elseif($exam->department==2){
                                            <span >EEE</span>}
                                            @elseif($exam->department==3){
                                            <span >SWE</span>}
                                            @else
                                                <span >not defined</span>}
                                            @endif
                                        </h4>
                                        <h4><span>Faculty of </span>
                                            @if($exam->faculty==1){
                                            <span>FSIT</span>}
                                            @elseif($exam->faculty==2){
                                            <span >Engineering</span>}
                                            @elseif($exam->faculty==3){
                                            <span >Food and Nutration</span>}
                                            @else
                                                <span >not defined</span>}
                                            @endif
                                        </h4>
                                        <h3><span>Exam Name: </span>{{$exam->exam_name}}, <span>Semester: </span>{{$exam->semester}} </h3>

                                        <div><h4><span>Course Title: </span>{{$exam->course_title}}, <span>Course Code: </span>{{$exam->course_code}} </h4></div>
                                        <div><h4><span>Time: </span>{{$exam->exam_time}} Minute &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span>Marks: </span>{{$exam->full_marks}} </h4></div>


                                    </div>
                                    {{--<h3 class="block text-center"><strong>{{$exam_name->exam_name}}</strong></h3>--}}
{{--                                    <h4 class="block text-center">Category: <strong>{{$exam->category($exam->id)->name}}</strong> Subject: <strong>{{$exam->subject}}</strong></h4>--}}
                                    <div class="form-group mt-repeater no-extra-space">
                                        <div data-repeater-list="ques">
                                            <div data-repeater-item class="mt-repeater-item">
                                                <div class="mt-repeater-row">
                                                    <div class="col-md126 col-md-9 col-md-offset-1">
                                                        <label class="control-label">Question</label>
                                                        <p class="help-block" style="font-size:12px;">Question is required</p>
                                                        <input name="question" type="text" placeholder="Question" class="form-control" />
                                                    </div>
                                                    <div class="col-md-9 col-md-offset-1">
                                                        <label class="control-label">Answer</label>
                                                        <p class="help-block" style="font-size:12px;">Answer need to add in option for random and unique type.</p>
                                                        <input type="text" name="answer" placeholder="Answer" class="form-control">
                                                    </div>
                                                    <div class="col-md-9 col-md-offset-1">
                                                        <label class="control-label">Possible Option</label>
                                                        <p class="help-block" style="font-size:12px;">All field are not required</p>
                                                        <input type="text" name="option1" placeholder="Possible Answer 1" class="form-control" style="margin-bottom: 10px;">
                                                        <input type="text" name="option2" placeholder="Possible Answer 2" class="form-control" style="margin-bottom: 10px;">
                                                        <input type="text" name="option3" placeholder="Possible Answer 3" class="form-control" style="margin-bottom: 10px;">
                                                        <input type="text" name="option4" placeholder="Possible Answer 4" class="form-control" style="margin-bottom: 10px;">
                                                    </div>
                                                    <div class="col-md-1" style="margin-top: 48px;">
                                                        <a href="javascript:;" data-repeater-delete class="btn btn-danger mt-repeater-delete">
                                                            <i class="fa fa-close"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-offset-1 col-md-9">
                                            <a href="javascript:;" data-repeater-create class="btn btn-info mt-repeater-add">
                                                <i class="fa fa-plus"></i> Add Question</a></div>
                                    </div>


                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-1 col-md-9">
                                    <input type="submit" class="btn btn-success" value="Submit">
                                </div>

                            </div>
                            <div class="caption box-header bg-blue " style="margin-top: 10px; height: 40px;">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{url('')}}/js/jquery.repeater.js" type="text/javascript"></script>
    <script src="{{url('')}}/js/indicator-repeater.js" type="text/javascript"></script>
@endsection


