@extends('layouts.layout-standard')

@section('fumetti')
<ul>
  @foreach($comics as $value)
  <li>
    <img src="{{ $value->thumb }}" alt=""> <br>
    {{ $value->title }} <br>
    {{ $value->price }} <br>
    {{ $value->series }} <br>
    <button><a href="{{ route('comics.show', $value) }}">Visualizza</a></button>
    <button><a href="{{ route('comics.edit', $value) }}">Modifica</a></button>

    <form action="{{ route('comics.destroy', $value) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit">Elimina</button>
    </form>
    <br><br>
  </li>
  @endforeach
</ul>
@endsection