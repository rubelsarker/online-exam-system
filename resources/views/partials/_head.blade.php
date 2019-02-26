<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Online Exam @yield('title')</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="{{url('')}}/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="{{url('')}}/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="{{url('')}}/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="{{url('')}}/AdminLTE/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="{{url('')}}/AdminLTE/dist/css/skins/skin-blue.min.css">
@yield('stylesheets')
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">