@extends('layouts.default')

@section('pageTitle', 'Dettagli fumetto')

@section('content')
  <h1>Dettagli fumetto #{{ $comic->id }}</h1>

  {{-- @dump(Request::route()) --}}

  <ul>
    <li><strong>Title</strong>: {{ $comic->title }}</li>
    <li><strong>Description</strong>: {{ $comic->description }}</li>
    <li><strong>Immagine copertina</strong>: {{ $comic->thumb }}</li>
    <li><strong>Prezzo</strong>: {{ $comic->price }}</li>
    <li><strong>Serie</strong>: {{ $comic->series }}</li>
    <li><strong>In saldo</strong>: {{ $comic->sale_date }}</li>
    <li><strong>Tipo</strong>: {{ $comic->type }}</li>
  </ul>

@endsection