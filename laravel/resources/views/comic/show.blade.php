@extends('layout.app')

@section('title', $comic['titolo'])

@section('content')

    <div class="flex">
        <div class="button">
            <a href="{{route('comics.edit', $comic->id)}}">modifica fumetto</a>
        </div>
        <div class="button">
            <a href="{{route('comics.index')}}">Torna alla home</a>
        </div>
        <div>
            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input style="color: red;" class="button" type="submit" value="Cancella">
            </form>
        </div>
        <h2>{{$comic->titolo}}</h2>
        <img class="poster" src="{{$comic->poster}}" alt="">
        <div>
            <span><strong>Anno di uscita:</strong> {{$comic->anno}}</span><br>
            <span><strong>Prezzo:</strong> {{$comic->prezzo}} Euro</span>
        </div>

    </div>

@endsection