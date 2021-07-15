@extends('layout.app')

@section('title', $comic['titolo'])

@section('content')

    <div class="flex">
        <div class="update">
            <a href="{{route('comics.edit', $comic->id)}}">modifica fumetto</a>
        </div>
        <div class="back">
            <a href="{{route('comics.index')}}">Torna alla home</a>
        </div>
        
        <h2>{{$comic->titolo}}</h2>
        <img class="poster" src="{{$comic->poster}}" alt="">
        <div>
            <span><strong>Anno di uscita:</strong> {{$comic->anno}}</span><br>
            <span><strong>Prezzo:</strong> {{$comic->prezzo}} Euro</span>
        </div>
    </div>

@endsection