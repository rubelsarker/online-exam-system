@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Update Your exam</h3>
                </div>
                <div class="col-sm-offset-2">

                {{ Form::model($exam, ['route' => ['teacherexam.update',$exam->id]])}}
                {{method_field('PUT')}}
                <div class="box-body">
                    <div class="form-group">
                        <div class="col-sm-10">
                            {{Form::label('exam_name','Exam Name',['class' => 'control-label'])}}
                            {{Form::text('exam_name', null ,['class' =>'form-control','placeholder' =>'Exam Name']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10">
                            {{Form::label('faculty','Faculty',['class' => 'control-label'])}}
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="faculty" required id="faculty">
                                <option selected="selected">Faculty</option>
                                <option value="1">FSIT</option>
                                <option value="2">Engineering</option>
                                <option value="3">Food and Nutration</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10">
                            {{Form::label('department','Department',['class' => 'control-label'])}}
                            <select class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true" name="department" id="department" required>
                                <option selected="selected">Department</option>
                                <option value="1">CSE</option>
                                <option value="2">EEE</option>
                                <option value="3">SWE</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            {{Form::label('semester','Semester',['class' => 'control-label'])}}
                            {{Form::text('semester', null ,['class' =>'form-control','placeholder' =>'Semester']) }}
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-10">
                            {{Form::label('course_title','Course Title',['class' => 'control-label'])}}
                            {{Form::text('course_title', null ,['class' =>'form-control','placeholder' =>'Course Title']) }}
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-10">
                            {{Form::label('course_code','Course Code',['class' => 'control-label'])}}
                            {{Form::text('course_code', null ,['class' =>'form-control','placeholder' =>'Course Code']) }}
                        </div>
                    </div>

                    <br>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-10">
                            {{Form::label('full_marks','Total Marks',['class' => 'control-label'])}}
                            {{Form::text('full_marks', null ,['class' =>'form-control','placeholder' =>'Total Marks']) }}
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-10">
                            {{Form::label('exam_time','Time',['class' => 'control-label'])}}
                            {{Form::text('exam_time', null ,['class' =>'form-control','placeholder' =>'Time']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            {{Form::label('exam_note','Note',['class' => 'control-label'])}}
                            {{Form::textarea('exam_note', null ,['class' =>'form-control','placeholder' =>'Note....']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            {{Form::label('exam_rules','Rule',['class' => 'control-label'])}}
                            {{Form::textarea('exam_rules', null ,['class' =>'form-control','placeholder' =>'Rule....']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10">
                            {{Form::label('exam_description','Description',['class' => 'control-label'])}}
                            {{Form::textarea('exam_description', null ,['class' =>'form-control','placeholder' =>'Description....']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10">
                            {{Form::label('type','Exam Type',['class' => 'control-label'])}}

                            <select class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true" name="exam_type" >
                                <option selected="selected">Exam Type</option>
                                <option value="1">MCQ</option>
                                <option value="2">Broad</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>


                    <div class="box-footer">
{{--                       {{Form::submit('Update Post')}}--}}
                        <button type="submit" class="btn bg-olive btn-flat pull-right">Update Post</button>
                    </div>
                    {{ Form::close()}}

            </div>

            </div>
        </div>
    </div>
@endsection