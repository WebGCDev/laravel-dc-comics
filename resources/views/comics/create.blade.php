@extends('comics.template')

@section('main')
  <h1>CREAZIONE NUOVO FUMETTO</h1>
 <p><a href="{{route('comics.show',1)}}">COMIC'S SHOW</a></p>
  <form action="{{ route('comics.store')}}" method="POST">
    @csrf
  <div>
       <label for="title">TITOLO</label>
       
        <input type="text" name="title" id="title">
    </div>
   
    <div>
        <label for="description">DESCRIZIONE</label>
        
        <input type="text" name="description" id="description">
    </div>

  <div>
        <label for="thumb">COPERTINA FUMETTO</label>
        <input type="text" name="thumb" id="thumb">
    </div>

    <div>
        <label for="price">PREZZO</label>
        <input type="text" name="price" id="price">
    </div>
<div>
        <label for="series">SERIE</label>
        <input type="text" name="series" id="series">
    </div>

    
    <div>
        <label for="sale_date">DATA DI VENDITA</label>
        <input type="text" name="sale_date" id="sale_date">
    </div>

    <div>
        <label for="type">TIPO</label>
        <input type="text" name="type" id="type">
    </div>

    <button>AGGIUNGI IL TUO NUOVO FUMETTO</button>
  </form>
@endsection