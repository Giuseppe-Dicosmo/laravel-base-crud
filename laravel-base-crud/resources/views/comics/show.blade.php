@extends('layouts.layout-standard')

@section('fumetti')
<div>
  <img src="{{ $comic->thumb }}" alt="">
  <h1>{{ $comic->title }}</h1>
  <p>{{ $comic->description }}</p>
</div>
@endsection