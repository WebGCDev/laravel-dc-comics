@extends('comics.template')

@section('main')
  <h1>CREAZIONE NUOVO FUMETTO</h1>
 <p><a href="{{route('comics.index')}}">COMIC'S HOME</a></p>
  <form action="{{ route('comics.store')}}" method="POST">
    @csrf

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

  <div>
       <label for="title">TITOLO</label>
       
        <input type="text" name="title" id="title" value="{{old('title')}}" required>
    </div>
   
    <div>
        <label for="description">DESCRIZIONE</label>
        
        <input type="text" name="description" id="description" value="{{old('description')}}" nullable>
    </div>

  <div>
        <label for="thumb">COPERTINA FUMETTO</label>
        <input type="text" name="thumb" id="thumb" value="{{old('thumb')}}" nullable>
    </div>

    <div>
        <label for="price">PREZZO</label>
        <input type="text" name="price" id="price" value="{{old('price')}}" nullable >
    </div>
<div>
        <label for="series">SERIE</label>
        <input type="text" name="series" id="series" value="{{old('series')}}" nullable>
    </div>

    
    <div>
        <label for="sale_date">DATA DI VENDITA</label>
        <input type="text" name="sale_date" id="sale_date" value="{{old('sale_date')}}" nullable >
    </div>

    <div>
        <label for="type">TIPO</label>
        <input type="text" name="type" id="type" value="{{old('type')}}" nullable>
    </div>

    <button>AGGIUNGI IL TUO NUOVO FUMETTO</button>
  </form>
@endsection