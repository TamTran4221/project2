<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/template/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/template/admin/dist/css/adminlte.min.css">
</head>


        @yield('content')
    <script src="{{url('template/layout/js')}}/jquery.min.js"></script>
    <script src="{{url('template/layout/js')}}/jquery-ui.js"></script>
    <script src="{{url('template/layout/js')}}/jquery.nestable.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{url('template/layout/js')}}/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{url('template/layout/js')}}/adminlte.min.js"></script>
    <script src="{{url('template/layout/js')}}/angular.min.js"></script>
    <script src="{{url('template/layout/js')}}/dashboard.js"></script>
    <script src="{{url('template/layout/js')}}/app.js"></script>
    <script src="{{url('template/layout/js')}}/function.js"></script>
</body>

</html>