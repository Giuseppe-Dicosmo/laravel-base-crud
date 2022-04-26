@extends('layouts.layout-standard')

@section('fumetti')
<ul>
  @foreach($comics as $value)
  <li>
    <img src="{{ $value->thumb }}" alt=""> <br>
    {{ $value->title }} <br>
    {{ $value->description }} <br>
    {{ $value->price }} <br>
    {{ $value->series }} <br> <br>
  </li>
  @endforeach
</ul>
@endsection