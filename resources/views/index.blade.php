<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div class="logo">
            <img src="{{asset('img/marchio-sito-test.png')}}" alt="La Molisana">
        </div>
        <ul class="navbar">
            <a href="#">Home</a>
            <a href="{{route('prodotti')}}">Prodotti</a>
            <a href="#">Chi Siamo</a>
            <i class="fa fa-bars" style=""></i>
        </ul>
    </body>
</html>
