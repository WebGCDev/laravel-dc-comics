@extends('comics.template')


@section('main')
   <button><a href="{{route('comics.index')}}">TORNA INDIETRO</a></button>
   <h1>{{ $comic->title }}</h1>
   <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
   <hr>
        <p>{{ $comic->description }}</p>
        <ul>
            <li>
                <strong>Serie:</strong>
                {{ $comic->series }}
            </li>
            <li>
                <strong>Tipologia Fumetto: </strong>
                {{ $comic->type }}
            </li>
            <li>
                <strong>Prezzo di vendita al pubblico:</strong>
                {{ $comic->price }}
            </li>
            <li>
                <strong>Data di vendita: </strong>
                {{ $comic->sale_date }}
            </li>

        </ul>
  {{-- <p>{{ $comic->id }}</p> --}}
  <p><a href="{{route('comics.index')}}">INDEX PRINCIPALE</a> </p>
  <p><a href="{{route('comics.create')}}">CREATE PAGE</a> </p>
  
@endsection