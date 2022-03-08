@extends('layouts.default')

@section('pageTitle', 'Dettagli fumetto')

@section('content')
  <h1>Dettagli fumetto #{{ $comic->id }}</h1>

  {{-- @dump(Request::route()) --}}

  <ul>
    <li><strong>sale date</strong>: {{ $comic->sale_date }}</li>
    <li><strong>type</strong>: {{ $comic->type }}</li>
  </ul>

@endsection