<ul>
  {{-- Mostrar errores en general --}}
  @foreach ($errors->all() as $error)
    <li>{{$error}}</li>

  @endforeach

</ul>

<form id="agregarPelicula" name="/addMovie" method="post">
  @csrf
  {{-- {{csrf_field()}} // es obligatorio para los formularios --}}
    <div>
        <label for="titulo">Titulo</label>
        <input type="text" name="title" id="titulo"/>
        <small>{{ $errors->first('title') }}</small>
    </div>
    <div>
        <label for="rating">Rating</label>
        <input type="text" name="rating" id="rating"/>
        {{-- Mostrar errores por cada campo --}}
        <small>{{ $errors->first('rating') }}</small>

    </div>
    <div>
        <label for="premios">Premios</label>
        <input type="text" name="awards" id="premios"/>
    </div>
    <div>
        <label for="duracion">Duracion</label>
        <input type="text" name="length" id="duracion"/>
    </div>
    <div>
        <label>Fecha de Estreno</label>
        <input type="date" name="release_date" value="">
    </div>
    <input type="submit" name="submit"/>
</form>
