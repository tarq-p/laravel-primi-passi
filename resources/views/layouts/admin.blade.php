<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title></title>
    </head>
    <header>
        @include('index')
    </header>
        <main>
            @yield('mainadmin')
        </main>
    <body>
    </body>
</html>
