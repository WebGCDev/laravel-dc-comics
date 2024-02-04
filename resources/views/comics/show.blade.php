@extends('comics.template')


@section('main')
   <h1>pagina show</h1>
  {{-- <p>{{ $comic->id }}</p> --}}
  <p><a href="{{route('comics.index')}}">INDEX PRINCIPALE</a> </p>
  <p><a href="{{route('comics.create')}}">CREATE PAGE</a> </p>
  
@endsection