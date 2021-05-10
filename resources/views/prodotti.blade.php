@extends('layouts.main')
@section('title')
    Prodotti    
@endsection
@section('content')
    <main id='bg-light'>
        <div class="prev">
            @if ($id > 0) 
                <a href=" {{ route('prodotti', $id - 1) }}"><i class="fas fa-chevron-left"></i></a>
            @endif
        </div>
        <div class="container">            
            <div class="prodotto">
                <h1>{{$pasta['titolo']}}</h1>
                <img src="{{$pasta['src-h']}}" alt="">
                <img src="{{$pasta['src-p']}}" alt="">
                <p>{!! $pasta['descrizione'] !!}</p>
            </div>            
        </div>
        <div class="next">
            @if ($id < $length) 
                <a href=" {{ route('prodotti', $id + 1) }}"><i class="fas fa-chevron-right"></i></a>
            @endif
        </div>
    </main>    
@endsection