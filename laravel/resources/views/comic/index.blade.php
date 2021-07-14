@extends('layout.app')

@section('title','homepage')
    
@section('content')
    
    <h1>fumetti dc</h1>

    <div class="add">
        <a href="{{route('create')}}">Aggiungi un nuovo fumetto</a>
    </div>

    <div id="list">

        @foreach ($comics as $comic)
        <div class="cards">

            <div class="poster">
                <a href="{{route('show', $comic->id)}}">
                    <img src="{{$comic->poster}}" alt="">
                </a>
            </div>
                
        </div>
        @endforeach

    </div>
        

@endsection

        
