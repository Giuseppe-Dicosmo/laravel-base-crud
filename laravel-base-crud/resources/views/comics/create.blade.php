@extends('layouts.layout-standard')

@section('fumetti')
<div>
  <h1>nuovo fumetto</h1>

  <form action="{{ route('comics.store') }}" method="POST">
    @csrf

    <label for="immagine">Immagine:</label><br>
    <input type="text" id="immagine" name="thumb" placeholder="Inserisci un url"><br>

    <label for="titolo">Titolo:</label><br>
    <input type="text" id="title" name="title" placeholder="Inserisci un titolo"><br>

    <label for="tipo">Tipo:</label><br>
    <select name="type" id="tipo">
      <option value="">seleziona</option>
      <option value="comic_book">Comic Book</option>
      <option value="graphic_novel">Graphic Novel</option>
    </select> <br>

    <label for="serie">Serie:</label><br>
    <input type="text" id="serie" name="series" placeholder="inserisci la serie"><br>

    <label for="descrizione">Descrizione:</label><br>
    <textarea name="description" id="descrizione" cols="30" rows="10"></textarea><br>

    <label for="data">Data:</label> <br>
    <input type="date" id="data" name="sale_date"> <br>

    <label for="prezzo">Prezzo:</label><br>
    <input type="text" id="prezzo" name="price" placeholder="inserisci il prezzo"><br><br>

    <button type="submit">
      Carica
    </button>
  </form>
</div>
@endsection