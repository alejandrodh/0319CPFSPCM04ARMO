@extends('master')

@section('main')
<form id="agregarPelicula" name="agregarPelicula" method="POST">
    <div>
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo"/>
    </div>
    <div>
        <label for="rating">Rating</label>
        <input type="text" name="rating" id="rating"/>
    </div>
    <div>
        <label for="premios">Premios</label>
        <input type="text" name="" id="premios"/>
    </div>
    <div>
        <label for="duracion">Duracion</label>
        <input type="text" name="duracion" id="duracion"/>
    </div>
    <div>
        <label>Fecha de Estreno</label>
        <input type="date" name="release_date" value="">
    </div>
    <input type="submit" value="Agregar Pelicula" name="submit"/>
</form>
@endsection
