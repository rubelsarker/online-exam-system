@extends('admin.admin_layout')
@section('content')
    <div class="box span12">
        <div class="box-header">
            <h2>All Slider</h2>

        </div>
        <div class="box-content">
                <div class="dataTables_wrapper">

                    <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 307px;">Slider ID</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 226px;">Slider Image</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 124px;">Status</th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 264px;">Actions</th>
                            </tr>
                        </thead>

                        <tbody role="alert" aria-live="polite" aria-relevant="all">

                        @foreach($all_slider_info as $v_slider)
                            <tr>

                                <td class="  sorting_1">{{ $v_slider->id}}</td>
                                <td><img src="{{url($v_slider->slider_image)}}" height="150" width="200" ></td>
                                <td class="center ">
                                    @if( $v_slider->publication_status == 1)
                                        <span class="label label-success"> Active</span>
                                    @else
                                        <span class="label label-danger"> Unactive</span>
                                    @endif

                                </td>

                                <td class="center ">
                                    @if($v_slider->publication_status == 1)
                                        <a class="btn btn-danger" href="{{url('sliderunactive').'/'.$v_slider->id}}">
                                            <i class="halflings-icon white thumbs-down"></i>
                                        </a>
                                    @else
                                        <a class="btn btn-success" href="{{url('slideractive').'/'.$v_slider->id}}">
                                            <i class="halflings-icon white thumbs-up"></i>
                                        </a>
                                    @endif

                                    <a class="btn btn-danger" href="{{url('sliderdelete').'/'.$v_slider->id}}">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

        </div>
    </div>
@endsection