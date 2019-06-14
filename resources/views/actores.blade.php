@extends('welcome')

@section('main')
    <h1>Lista de actores</h1>
    <ul>
      {{-- @dd($peliculas) --}}
      @foreach ($actores as $actor)
        <li>{{$actor->first_name}}, {{$actor->last_name}}</li>
      @endforeach
    </ul>

@endsection

@section('menu', '')
