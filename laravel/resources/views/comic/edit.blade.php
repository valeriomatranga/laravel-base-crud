@extends('layout.app')

@section('title','create new')

@section('content')
    
    <h1>Inserisci le modifiche al Fumetto</h1>

    <form action="{{route('comics.update', $comic->id)}}" method="post">
        @csrf
        @method('PUT')
        
        <div class="container">
            <div class="form-group">
                <label for="titolo">titolo</label>
                <input type="text" value="{{$comic->titolo}}" name="titolo" id="titolo" class="form-control" placeholder="titolo" aria-describedby="helpId">
                <small id="helpId" class="text-muted"></small>
            </div>

            <div class="form-group">
                <label for="poster">poster</label>
                <input type="text" value="{{$comic->poster}}" name="poster" id="poster" class="form-control" placeholder="percorso" aria-describedby="helpId">
                <small id="helpId" class="text-muted"></small>
            </div>

            <div class="form-group">
                <label for="uscita">anno di uscita</label>
                <input type="text" value="{{$comic->uscita}}" name="uscita" id="uscita" class="form-control" placeholder="anno" aria-describedby="helpId">
                <small id="helpId" class="text-muted"></small>
            </div>

            <div class="form-group">
                <label for="prezzo">prezzo</label>
                <input type="text" value="{{$comic->prezzo}}" step="0.01" name="prezzo" id="prezzo" class="form-control" placeholder="€" aria-describedby="helpId">
                <small id="helpId" class="text-muted"></small>
            </div>
            <button type="submit">Invia</button>
        </div>
    </form>

@endsection
    
