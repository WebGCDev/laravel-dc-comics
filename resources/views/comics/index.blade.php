@extends('comics.template')

@section('main')
    <h1>INDEX</h1>

    <ul>    
    @foreach ($comics as $comic)
         <li>{{ $comic['title'] }} <a href="{{route('comics.show',$comic['id'])}}">INFO</a></li>
    @endforeach
    </ul>
    <p><a href="{{route('home')}}">HOME</a></p>
    
@endsection