@extends('admin.admin_layout')
@section('title')
    | Add Slider
@section('content')
    <div class="box span12">
        <div class="box-header" data-original-title="">
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Slider</h2>
        </div>
        <div class="box-content">
            <form class="form-horizontal" method="post" action="{{url('/save-slider')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="fileInput">Slider Image</label>
                        <div class="controls">
                            <div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" id="fileInput" type="file" name="slider_image">
                                <span class="filename" style="user-select: none;">No file selected</span>
                                <span class="action" style="user-select: none;">Choose File</span>
                            </div>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Publication Status</label>

                        <div class="controls">
                            <input type="checkbox" name="publication_status" value="1">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Add Slider</button>

                    </div>
                </fieldset>
            </form>

        </div>
    </div>
@endsection