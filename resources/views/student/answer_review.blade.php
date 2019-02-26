@extends('layouts.main')
@section('content')
    <div class="container">


    <?php
     $arr = Session::get('answer_review');




        foreach($arr as $ar) {
            echo  $ar;
            echo '</br>';

        }


        ?>

    </div>
@endsection
