<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tasks</title>

        <link rel="stylesheet" href="{{url('/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    </head>
    <body class="antialiased">
        @yield('content')
        <script src="{{url("assets/js/javascript.js")}}"></script>
    </body>
</html>
