<!DOCTYPE html>
<html>
<head>
    @include('partials._head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('partials._header')

    <!-- Left side column. contains the logo and sidebar -->
     @include('partials._nav')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |

              -------------------------->
            {{--@include('partials._breadcumb')--}}
            @include('partials._message')
            @yield('content')

        </section>
    </div>
    @include('partials._fotter')
</div>
@include('partials._javascripts')
@yield('scripts')
</body>
</html>