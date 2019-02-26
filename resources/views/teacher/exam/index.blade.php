@extends('layouts.main')
@section('title')
    | All Exams
@endsection
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">All Exams</h3>
        </div>
        <div class="box-body">
            <table class="table table-condensed">
                <tbody>
                    <tr>
                        <th>Exam ID</th>
                        <th>Exam Name</th>
                        <th>Department</th>
                        <th>Course Title</th>
                        <th>Exam Type</th>
                        <th>Total Marks</th>
                        <th>Key</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>

                    @foreach($exams as $exam)
                        <tr>
                            <td>{{$exam->id}}</td>
                            <td>{{$exam->exam_name}}</td>

                            <td>
                                @if($exam->department==1){
                                    <span>CSE</span>}
                                @elseif($exam->department==2){
                                    <span >EEE</span>}
                                @elseif($exam->department==3){
                                    <span >SWE</span>}
                                @else
                                    <span >not defined</span>
                                @endif
                            </td>
                            <td>{{$exam->course_title}}</td>
                            <td>
                                @if($exam->exam_type==1){
                                    <span>MCQ</span>}
                                @elseif($exam->exam_type==2){
                                    <span>Broad</span>}
                                @else
                                    <span>not defined</span>
                                @endif
                            </td>
                            <td>{{$exam->full_marks}}</td>
                            <td>{{$exam->random}}</td>
                            <td>{{$exam->exam_time}}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success">Action</button>
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <a href="{{route('teacherexam.edit',$exam->id)}}"><button class="btn btn-sm bg-purple btn-flat btn-block">Edit</button></a>

                                        <li class="divider"></li>
                                        <a href="{{ url('set-question').'/'.$exam->id }}"><button class="btn btn-sm bg-orange btn-flat btn-block">Set Question</button></a>
                                        <li class="divider"></li>
                                        <form action="{{route('teacherexam.destroy',$exam->id)}}" method="post" class="form-horizontal">
                                            {{method_field('delete')}}
                                            {{csrf_field()}}
                                            <input type="submit" class="btn btn-sm btn-danger btn-flat btn-block" value="Delete">
                                        </form>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="box-footer clearfix">
            <a href="{{route('teacherexam.create')}}">
                <button style="margin-top: 20px;" type="button" class="btn btn-primary btn-flat bg-olive">
                    Create Exam
                </button>
            </a>
        </div>

    </div>

@endsection