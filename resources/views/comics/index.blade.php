@extends('comics.template')

@section('main')
    <h1>INDEX</h1>

    <ul>    
    @foreach ($comics as $comic)
         <li>{{ $comic['title'] }} <a href="{{route('comics.show',$comic['id'])}}">INFO</a> <a href="{{route('comics.edit',$comic['id'])}}">MODIFICA</a></li>
    @endforeach
    </ul>
    <button><a href="{{route('comics.create')}}">AGGIUNGI UN NUOVO FUMETTO</a></button>
    <p><a href="{{route('home')}}">HOME</a></p>
    
@endsection