<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        
    </head>
    <body>
        @include('_nav')

        <div class="container">

            @yield('content')

        </div><!-- /.container -->
    </body>
</html>
