@extends('layouts.main')
@section('title')
    | My Exam
@endsection
@section('stylesheets')
    <link rel="stylesheet" href="{{url('')}}/css/timeTo.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption box-header bg-blue ">
                        Question
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-1" style="padding: 10px;">
                        <div class="well">
                            <h3 class="text-danger">Time Remaining </h3>
                            <div id="countdown-1"></div>

                        </div>

                    </div>
                </div>


                <div class="text-center">
                    <img src="{{url('')}}/AdminLTE/dist/img/diu.png"  alt="DIU">
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
                <div class="portlet light bordered" id="form_wizard_1">
                    <div class="portlet-body form">
                        <form class="form-horizontal" action="{{url('/answer-submit')}}" id="submit_form" method="POST">
                            {{csrf_field()}}

                            <div class="form-wizard">
                                <div class="form-body">
                                    <div class="form-group">
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-sm-10">
                                                    <?php $i=1; ?>
                                                        @foreach($questions as $question)
                                                            <h4>{{$i++}}{{'. '}}{{$question->question}}</h4>

                                                            @foreach($question->option() as $option)
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="a_{{$question->id}}" id="optionsRadios1" value="{{$option->id}}" >
                                                                        {{$option->option}}
                                                                    </label>
                                                                </div>

                                                            @endforeach

                                                        @endforeach
                                                </div>
                                            </div>
                                        </div>

                                    </div>



                                </div>
                            </div>
                            {{--<input type="hidden" value="{{$exam->id}}" name="exam_id">--}}
                            <div class="row">
                                <div class="col-sm-10" style="margin-left: 250px;">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{url('')}}/js/jquery.time-to.js" type="text/javascript"></script>
    <script>



        /**
         * Hide hours
         */
        $('#countdown-1').timeTo(parseInt('{{$exam->exam_time*60}}'), function(){
            $('#submit_form').submit();

        });


    </script>
@endsection