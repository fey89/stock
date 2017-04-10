<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>App Name - @yield('title')</title>
    </head>

    <body>
        @section('sidebar')
            This is the master sidebar.
            <ul class="nav nav-pills pull-right">
                <li class="{{ Request::is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="{{ Request::is('about') ? 'active' : '' }}">
                    <a href="{{ url('about') }}">About Us</a>
                </li>
                <li class="{{ Request::is('auth/login') ? 'active' : '' }}">
                    <a href="{{ url('auth/login') }}">Login</a>
                </li>
                <li class="{{ Request::is('foo') ? 'active' : '' }}">
                    <a href="{{ url('foo') }}">Foo</a>
                </li>
            </ul>

        @show

        <div class="container">
            @yield('content')
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>