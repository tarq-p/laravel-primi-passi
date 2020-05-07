@php
    $prodotti = config('products');
    $prodotto = $prodotti[$id];
    // dd($prodotto);
@endphp

@extends('layouts/layout')

@section('titolo')
    {{$prodotto['titolo']}}
@endsection

@section('main')
    <div class="prodotto">
        <h3>{{$prodotto['titolo']}}</h3>
        <img src="{{$prodotto['src-p']}}" alt="">
        <p>{!! $prodotto['descrizione']!!}</p>
    </div>
@endsection
