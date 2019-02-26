@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="well">

                <div class="row">
                        <div class="col-sm-5">
                            <div class="well">
                               <h4>Name: {{ Auth::user()->name }}</h4>
                               <h4>Email: {{ Auth::user()->email }}</h4>

                            </div>

                        </div>
                        <?php
                        if($answered){
                            $c_parcentage = ($correct/($correct + $wrong))*100;
                            $w_parcentage = ($wrong/($correct + $wrong))*100;
                        }






                        ?>


                    @if(!$answered)
                        <div class="col-sm-6 col-sm-offset-1">
                            <div class="well">
                                <div class="box box-primary">

                                    <div class="box-body">
                                        <div id="donut-chart" style="height: 300px;"></div>
                                    </div>
                                    <!-- /.box-body-->
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="well">
                                            <h4> <span class="text-success">Your didn't Ans anything</span></h4>


                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="well">
                                            <div>
                                                <div  style="height: 25px; width: 40px; background-color: pink; float: left;"></div> &nbsp; <span class="text-success">100% Not answered</span>

                                            </div>


                                        </div>
                                    </div>

                                </div>
                                <a href="{{url('/answer-review')}}" type="button" class="btn btn-primary btn-block" >Correct Answer Review</a>





                            </div>

                        </div>
                    @else
                        <div class="col-sm-6 col-sm-offset-1">
                            <div class="well">
                                <div class="box box-primary">

                                    <div class="box-body">
                                        <div id="donut-chart" style="height: 300px;"></div>
                                    </div>
                                    <!-- /.box-body-->
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="well">
                                            <h4> <span class="text-success">Your Correct Ans  is:</span> {{$correct}}</h4>
                                            <h4> <span class="text-danger">Your Wrong Ans  is:</span> {{$wrong}}</h4>
                                            <h4> <span class="text-danger">Did not answered  is:</span> {{$not_answered}}</h4>


                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="well">
                                            <div>
                                                <div  style="height: 25px; width: 40px; background-color: green; float: left;"></div> &nbsp; <span class="text-success">{{$c_parcentage}} % correct Ans</span>

                                            </div>
                                            <div style="margin-top: 10px;">
                                                <div  style="height: 25px; width: 40px; background-color: red; float: left; clear: both; "></div> &nbsp; <span class="text-danger">{{$w_parcentage}} % Wrong Ans</span>
                                            </div>



                                        </div>
                                    </div>

                                </div>
                                <a href="{{url('/answer-review')}}" type="button" class="btn btn-primary btn-block" >Correct Answer Review</a>





                            </div>

                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>


@endsection
@section('scripts')
<!-- jQuery 3 -->
<script src="{{url('')}}/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('')}}/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{url('')}}/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{url('')}}/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('')}}/AdminLTE/dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="{{url('')}}/AdminLTE/bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{url('')}}/AdminLTE/bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{url('')}}/AdminLTE/bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="{{url('')}}/AdminLTE/bower_components/Flot/jquery.flot.categories.js"></script>
<!-- Page script -->
<script>
    $(function () {


        @if($answered)
        var donutData = [
            { label: 'wrong', data: parseInt('{{$w_parcentage}}'), color: '#F51E1D' },
            { label: 'Correct', data: parseInt('{{$c_parcentage}}'), color: '#22B720' },

        ];
        @else
        var donutData = [
                { label: 'not answered', data: 100, color: 'pink' },

            ];
        @endif
        $.plot('#donut-chart', donutData, {
            series: {
                pie: {
                    show       : true,
                    radius     : 1,
                    innerRadius: 0.5,
                    label      : {
                        show     : true,
                        radius   : 2 / 3,
                        formatter: labelFormatter,
                        threshold: 0.1
                    }

                }
            },
            legend: {
                show: false
            }
        })

    })


    function labelFormatter(label, series) {
        return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
            + label
            + '<br>'
            + Math.round(series.percent) + '%</div>'
    }
</script>
@endsection
