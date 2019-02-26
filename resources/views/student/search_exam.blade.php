@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row" style="margin-top: 250px;">
            <form  action="{{url('/match')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-3">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Key Value" name="random">
                    </div>
                    <button type="submit" class="btn btn-info ">Submit</button>
                </div>

            </form>

        </div>
    </div>
@endsection