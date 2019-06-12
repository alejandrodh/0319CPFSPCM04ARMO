<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Lista de películas</h1>
    <ul>
      @foreach ($peliculas as $pelicula)
        <li>{{$pelicula}}</li>
      @endforeach
    </ul>
  </body>
</html>
