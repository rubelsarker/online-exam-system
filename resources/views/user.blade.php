<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Online Exam System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">-->
    <link rel="stylesheet" href="{{url('')}}/frontend/css/bootstrap.css">
    <link rel="stylesheet" href="{{url('')}}/frontend/fontawesome-free-5.1.0-web/css/all.css">
    <link rel="stylesheet" href="{{url('')}}/frontend/css/normalize.css">

    <link rel="stylesheet" href="{{url('')}}/frontend/css/main.css">

</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->
<!-- Header Start -->
<div class="header" style="background-color:azure;">
    <div class="container-fluid  ">
        <div class="row">
           <div class="col-sm-4">
               <a href="{{ url('/') }}" style="color: #0d3349;"><h3>Online Exam</h3></a>

           </div>
            <div class="col-sm-2 offset-sm-6">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                        <a href="{{ url('/home') }}" type="button" class="btn btn-info btn-flat">Home</a>
                        @else
                            <a href="{{ route('login') }}" type="button" class="btn btn-warning btn-flat" >Login</a>
                            <a href="{{ route('register') }}"  type="button" class="btn btn-warning btn-flat">Register</a>
                            @endauth
                    </div>
                @endif
            </div>

        </div>
    </div>

</div>

<!-- Header End -->

<!-- Slider Start -->

<div class="container-fluid" id="slider" style="margin: 0px; padding: 0px;">
    <div class="row">
        <?php
        $all_published_slider = DB::table('sliders')
            ->where('publication_status',1)
            ->get();
        ?>

        <div class="col-xs-12 col-sm-12">
            <div id="demo" class="carousel slide" data-ride="carousel">

                    <ul class="carousel-indicators">
                        @foreach( $all_published_slider as $v_slider )
                        <li data-target="#demo" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                        @endforeach

                    </ul>

                <div class="carousel-inner">
                    @foreach( $all_published_slider as $v_slider )
                        <div class="carousel-item  {{ $loop->first ? ' active' : '' }}">
                            <img src="{{url($v_slider->slider_image)}}" style="height: 800px; width: 100%" >

                        </div>
                    @endforeach

                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>

        </div>
    </div>
</div>

<!-- Slider End -->

<!-- How it wotks Start -->
<div  class="container-fluid" style="background-color: aliceblue; margin-bottom: 30px; padding-bottom: 50px;">
    <div class="row">
        <div class="col-xs-8 col-sm-8">
            <div class="">
                <h1 class="text-center text-info justify-content-center jbt">How It Works?</h1>
                <div class="" >
                    This is the last online examination system you will ever need!
                    With our easy online test maker you will set up your own engaging exams that fit any kind of difficulty level.
                    Build and create your online exams & tests with great ease and provide your users with appropriate feedback,
                    so they will have a rich learning experience.

                </div>
            </div>

        </div>
        <div class="col-xs-4 col-sm-4">
            <div class="">
                <h1 class="text-center text-info justify-content-center jbt">News</h1>
                <marquee><p>It is secure online exam platfrom. </p></marquee>
            </div>

        </div>

    </div>
</div>


<!-- How It works End -->

<!-- Contact from  Start -->
<div class="container">

    <div class="row">

        <div class="col-xs-12 col-sm-6">
            <h4 class=" text-info" style="margin-bottom: 15px;">.....Contact Us......</h4>

            <div class="info">
                <div>
                    <span class="text-info"> Address</span>
                    <p>A108 Adam Street<br>New York, NY 535022</p>
                </div>

                <div>
                    <span class="text-info"> Email</span>
                    <p>info@example.com</p>
                </div>

                <div>
                    <span class="text-info">Phone</span>
                    <p>+1 5589 55488 55s</p>
                </div>

            </div>

        </div>


        <div class="col-xs-12 col-sm-6">
            <h4 class=" text-info text-center" style="margin-bottom: 15px;">.....Get In Touch......</h4>
            <div class="form">

                <div id="errormessage"></div>
                <form action="#" method="post" role="form" class="contactForm">

                    <div class="form-row">
                        <div class="form-group col-lg-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="msg" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button class="btn-lg btn-success" type="submit" title="Send Message">Send Message</button></div>
                </form>
            </div>
        </div>


    </div>

</div>
</div>


<!-- Contact From end -->
<!-- Footer start -->
<div class="container-fluid footer">
    <div class="row">
        <div class="col-xs-6 col-sm-6 text-center">
            <div class="copyright">
                &copy; Copyright <strong>RS</strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by <a href="#">RSarker</a>
            </div>
        </div>

        <div class="col-xs-3 col-sm-3 offset-sm-3 offset-xs-3 text-center">
            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link" href="#">About Us</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#">Contact Us</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#">FaceBook</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#">LinkedIn</a>
            </nav>
        </div>

    </div>
</div>

<!-- Footer end -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>-->
<script src="{{url('')}}/frontend/js/bt/js/bootstrap.min.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
