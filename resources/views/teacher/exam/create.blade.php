@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Exam</h3>
                </div>
                <form class="form-horizontal" method="post" action="{{route('teacherexam.store')}}">
                    {{csrf_field()}}
                    @include('teacher.exam._form')
                    <?php
                    $ran = rand(100000,1000000);
                    ?>
                    <input type="hidden" value="{{$ran}}"  name="random">
                    <input type="hidden" value="{{Auth::user()->id}}"  name="created_by">
                    <div class="box-footer">
                        <button type="submit" class="btn bg-olive btn-flat ">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection