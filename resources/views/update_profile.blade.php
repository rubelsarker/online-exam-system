@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <img src="{{url('')}}/uploads/avatars/{{$user -> avatar}}" alt="User Image" style="width: 150px; height: 150px;float:left;border-radius: 50%; margin-right: 25px;">
            <h2>{{$user->name}}'s Profile</h2>
            <form class="form-horizontal" method="post" action="{{url('/profile-update')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="fileInput">Update Profile Image</label>
                        <div class="controls">
                            <div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" id="fileInput" type="file" name="avatar">
                                <span class="filename" style="user-select: none;">No file selected</span>
                                <span class="action" style="user-select: none;">Choose File</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save</button>

                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection