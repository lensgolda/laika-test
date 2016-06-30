<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @section('stylesheets')
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
            <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        @show
        
    </head>
    <body>
        @include('_nav')

        <div class="container">
        
            @yield('content')

        </div><!-- /.container -->

        @section('scripts')

            <script src="{{ asset('js/jquery.min.js') }}"></script>
            
        @show
    </body>
</html>
