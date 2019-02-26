<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.partials._head')
    <style type="text/css">
        body { background: url({{url('')}}/backend/img/bg-login.jpg) !important; }
    </style>
</head>

<body>
<div class="container-fluid-full">
    <div class="row-fluid">

        <div class="row-fluid">
            <div class="login-box">
                <div class="icons">
                    <a href="#"><i class="halflings-icon home"></i></a>
                    <a href="#"><i class="halflings-icon cog"></i></a>
                </div>
                <h2>Login to your account</h2>
                <p class="alert-danger">
                    <?php
                    $exception=Session::get('exception');
                    if($exception){
                        echo $exception;
                        Session::put('exception',null);
                    }
                    ?>

                </p>
                <form class="form-horizontal" action="{{url('/admin-dashboard')}}" method="post">
                    <fieldset>
                        {{csrf_field()}}

                        <div class="input-prepend" title="Email">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10" name="admin_email" id="email" type="email" placeholder="type email"/>
                        </div>
                        <div class="clearfix"></div>

                        <div class="input-prepend" title="Password">
                            <span class="add-on"><i class="halflings-icon lock"></i></span>
                            <input class="input-large span10" name="admin_password" id="password" type="password" placeholder="type password"/>
                        </div>
                        <div class="clearfix"></div>

                        <label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

                        <div class="button-login">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="clearfix"></div>
                    </fieldset>
                </form>
                <hr>
                <h3>Forgot Password?</h3>
            </div>
        </div>
    </div>
</div>
@include('admin.partials._javascripts')
</body>
</html>
