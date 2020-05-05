<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div class="logo">
            <img src="{{asset('img/marchio-sito-test.png')}}" alt="La Molisana">
        </div>
        <ul class="navbar">
            <a href="{{route('prodotti')}}">Prodotti</a>
            <a href="#">Chi Siamo</a>
        </ul>
    </body>
</html>
