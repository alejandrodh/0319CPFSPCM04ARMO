{{-- @extends('welcome') --}}

{{-- @section('main') --}}
    <h1>Lista de actores</h1>
    <form class="" action="/actors/search" method="get">
      <input type="text" name="search" value="" placeholder="Buscar">
      <button type="submit">Enviar</button>
    </form>
    <ul>
      {{-- @dd($peliculas) --}}
      @foreach ($actores as $actor)
        <li><a href="/actore">{{$actor->first_name}}, {{$actor->last_name}}</a></li>
      @endforeach
    </ul>

{{-- @endsection --}}

{{-- @section('menu', '') --}}
{{ $actores->links() }}
