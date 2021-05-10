@extends('layouts.main')
@section('title')
    Prodotti    
@endsection
@section('content')
    <main id='bg-light'>
        <div class="container">
            <div class="prodotto">
                <h1>{{$pasta['titolo']}}</h1>
                <img src="{{$pasta['src-h']}}" alt="">
                <img src="{{$pasta['src-p']}}" alt="">
                <p>{!! $pasta['descrizione'] !!}</p>
            </div>
        </div>
    </main>    
@endsection