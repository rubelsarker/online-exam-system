<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials._head')
</head>

<body>
<!-- start: Header -->
    @include('admin.partials._navbar')
<!-- start: Header -->

<div class="container-fluid-full">
    <div class="row-fluid">
        <!-- start: sidebar -->
        @include('admin.partials._sidebar')
        <!-- end:sidebar -->
        <!-- start: Content -->
        <div id="content" class="span10">
            @include('admin.partials._breadcrumb')
            @include('admin.partials._message')
            @yield('content')
        </div>
        <!-- end: Content -->
    </div>
</div>
<div class="clearfix"></div>
@include('admin.partials._footer')
<!-- start: JavaScript-->
@include('admin.partials._javascripts')
@yield('scripts')
<!-- end: JavaScript-->
</body>

</html>
