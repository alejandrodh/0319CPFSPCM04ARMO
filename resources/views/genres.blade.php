@extends('welcome')

@section('main')
    <h1>Lista de géneros</h1>
    <ul>
      {{-- @dd($peliculas) --}}
      @foreach ($genres as $genre)
        {{-- @dd($pelicula->genre->name) --}}
        <li>{{$genre->name}}</li>
        <ul>

        @foreach ($genre->movie as $movie)
            <li>{{$movie->title}}</li>
        @endforeach
      </ul>

      @endforeach
    </ul>

@endsection
