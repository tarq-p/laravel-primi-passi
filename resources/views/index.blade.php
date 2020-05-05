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
        <ul>
            <a href="{{route('prodotti')}}">Prodotti</a>
            <li>Chi Siamo</li>
        </ul>
    </body>
</html>
