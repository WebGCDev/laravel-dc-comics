@extends('comics.template')

@section('main')
  <h1>CREAZIONE NUOVO FUMETTO</h1>
 <p><a href="{{route('comics.show',1)}}">COMIC'S SHOW</a></p>
  <form action="{{ route('comics.update',$comic->id)}}" method="POST">
    @csrf
    @method('PUT')
  <div>
       <label for="title">TITOLO</label>
       
        <input type="text" name="title" id="title" value="{{ $comic->title }}">
    </div>
   
    <div>
        <label for="description">DESCRIZIONE</label>
        
        <input type="text" name="description" id="description" value="{{ $comic->description }}">
    </div>

  <div>
        <label for="thumb">COPERTINA FUMETTO</label>
        <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">
    </div>

    <div>
        <label for="price">PREZZO</label>
        <input type="text" name="price" id="price" value="{{ $comic->price }}">
    </div>
<div>
        <label for="series">SERIE</label>
        <input type="text" name="series" id="series" value="{{ $comic->series }}">
    </div>

    
    <div>
        <label for="sale_date">DATA DI VENDITA</label>
        <input type="text" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
    </div>

    <div>
        <label for="type">TIPO</label>
        <input type="text" name="type" id="type" value="{{ $comic->type }}">
    </div>

    <button>AGGIUNGI IL TUO NUOVO FUMETTO</button>
  </form>
@endsection