@extends('layouts.default')

@section('pageTitle', 'Creazione Nuovo Fumetto')

@section('content')
  <h1>Creazione Nuovo Fumetto</h1>

  <form action="{{ route('comics.store') }}" method="post" class="row g-3">
    @csrf

    <div class="mb-3">
      <label class="form-label">Titolo</label>
      <input type="text" class="form-control" name="address">
    </div>

    <div class="mb-3">
      <label class="form-label">Descrizione</label>
      <input type="text" class="form-control" name="city">
    </div>

    <div class="mb-3">
      <label class="form-label">Copertina</label>
      <input type="text" class="form-control" name="region">
    </div>

    <div class="mb-3">
      <label class="form-label">Prezzo</label>
      <input type="text" class="form-control" name="province">
    </div>

    <div class="mb-3">
      <label class="form-label">Serie</label>
      <input type="text" class="form-control" name="country">
    </div>

    <div class="mb-3">
      <label class="form-label">Data Saldi</label>
      <input type="number" class="form-control" name="squareMeters">
    </div>

    <div class="mb-3">
      <label class="form-label">Tipo di Fumetto</label>
      <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
    </div>

    <div class="d-flex">
      <button class="btn btn-outline-secondary me-3" type="reset">Indietro</button>
      <button class="btn btn-success" type="submit">Crea</button>
    </div>
  </form>

@endsection