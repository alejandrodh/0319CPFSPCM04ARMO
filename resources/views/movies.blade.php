@extends('welcome')

@section('main')
    <h1>Lista de películas</h1>
    <ul>
      {{-- @dd($peliculas) --}}
      @foreach ($peliculas as $pelicula)
        {{-- @dd($pelicula->genre->name) --}}
        @if($pelicula->genre)
         <li>Title:{{$pelicula->title}} | Rating: {{$pelicula->rating}} | Género: {{$pelicula->genre->name}}</li> {{-- Los métodos de relaciones entre tablas se invocan como llamadas atributos --}}
      @endif
      @endforeach
    </ul>

@endsection

@section('menu')
   @parent {{-- La directiva parent permite extender al bloque y agregar nuevo contenido únicamente en esta vista.  https://laravel.com/docs/5.8/blade en el título Extending A Layout --}}
  <a href="/index">Menú solo para movies</a>{{--  En movies agregamos este menú --}}
@endsection
