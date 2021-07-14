@extends('layout.app')

@section('title', $comic['titolo'])

@section('content')

    <h2>{{$comic->prezzo}}</h2>
    <a href="{{route('show')}}">
        <img class="poster" src="{{$comic->poster}}" alt="">
    </a>
    <div>
        <span><strong>Anno di uscita:</strong> {{$comic->anno}}</span><br>
        <span><strong>Prezzo:</strong> {{$comic->prezzo}} Euro</span>
    </div>

@endsection