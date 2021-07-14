@extends('layout.app')

@section('title','create new')

@section('content')
    
    <h1>Inserisci un nuovo Fumetto</h1>

    <form action="{{route('store')}}" method="post">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="titolo">titolo</label>
                <input type="text" name="titolo" id="titolo" class="form-control" placeholder="titolo" aria-describedby="helpId">
                <small id="helpId" class="text-muted"></small>
            </div>

            <div class="form-group">
                <label for="poster">poster</label>
                <input type="text" name="poster" id="poster" class="form-control" placeholder="percorso" aria-describedby="helpId">
                <small id="helpId" class="text-muted"></small>
            </div>

            <div class="form-group">
                <label for="uscita">anno di uscita</label>
                <input type="text" name="uscita" id="uscita" class="form-control" placeholder="anno" aria-describedby="helpId">
                <small id="helpId" class="text-muted"></small>
            </div>

            <div class="form-group">
                <label for="prezzo">prezzo</label>
                <input type="text" name="prezzo" id="prezzo" class="form-control" placeholder="€" aria-describedby="helpId">
                <small id="helpId" class="text-muted"></small>
            </div>
            <button type="submit">Invia</button>
        </div>
    </form>

@endsection
    
