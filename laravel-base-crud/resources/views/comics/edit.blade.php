@extends('layouts.layout-standard')

@section('fumetti')
<div>
  <h1>modifica fumetto</h1>

  <form action="{{ route('comics.update', $comic) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="immagine">Immagine:</label><br>
    <input type="text" id="immagine" name="thumb" value="{{$comic->thumb}}" placeholder="Inserisci un url" size="100"><br>

    <label for="titolo">Titolo:</label><br>
    <input type="text" id="title" name="title" value="{{$comic->title}}" placeholder="Inserisci un titolo" size="40"><br>

    <label for="tipo">Tipo:</label><br>
    <select name="type" id="tipo">
      <option value="">seleziona</option>
      <option value="comic book" {{$comic->type == 'comic book' ? 'selected' : ''}}>Comic Book</option>
      <option value="graphic novel" {{$comic->type == 'graphic novel' ? 'selected' : ''}}> Graphic Novel</option>
    </select> <br>

    <label for="serie">Serie:</label><br>
    <input type="text" id="serie" name="series" value="{{$comic->series}}" placeholder="inserisci la serie"><br>

    <label for="descrizione">Descrizione:</label><br>
    <textarea name="description" id="descrizione" cols="50" rows="5">
    {{ $comic->description }}
    </textarea><br>

    <label for="data">Data:</label> <br>
    <input type="date" id="data" name="sale_date" value="{{$comic->sale_date}}"> <br>

    <label for="prezzo">Prezzo:</label><br>
    <input type="text" id="prezzo" name="price" value="{{$comic->price}}" placeholder="inserisci il prezzo"><br><br>

    <button type="submit">
      Carica
    </button>
  </form>
</div>
@endsection