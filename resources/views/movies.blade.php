@extends('welcome')

@section('main')
    <h1>Lista de películas</h1>
    <ul>
      {{-- @dd($peliculas) --}}
      @foreach ($peliculas as $pelicula)
        <li>{{$pelicula->title}} {{$pelicula->rating}}</li>
      @endforeach
    </ul>

@endsection

@section('menu', '')
