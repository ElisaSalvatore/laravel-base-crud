@extends('layouts.default')

@section('pageTitle', 'Fumetti')

@section("content")
    <h1>FUMETTI</h1>

    <div>
        <a href="{{ route('comics.create') }}class="btn btn-primary">Aggiungi</a>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Copertina</th>
            <th>Prezzo</th>
            <th>Serie</th>
            <th>In saldo</th>
            <th>Tipo</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($dati as key=> $comic)
            <tr>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->description }}</td>
            <td><img src="{{ $comic->thumb }}" alt="copertina fumetto"></td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->type }}</td>

            <td>
                {{-- <a href="comics/{{$comic->id}}" class="btn btn-link">Dettagli</a> --}}
                <a href="{{ route("comics.show", $comic->id) }}" class="btn btn-link">Dettagli</a>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection