<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome'); //Devuelve una vista.
});

Route::get('/unTexto', function () {
    return "<h1>Un texto de demo.</h1>"; //Devuelve texto plano.
});

Route::get('/parametrosFijos/{id}', function ($id) {
    return "<h1>Un texto con parámetros fijos. El contenido del parámetro es: $id</h1>"; //Devuelve texto plano.
});

Route::get('/parametrosOptativos/{id?}', function ($id="Soy el contenido demo") {
    return "<h1>Un texto con parámetros optativos.</h1>"; //Devuelve texto plano. Recordar como se escriben parámetros optativos en funciones.
});

Route::get('/pasandoDatos', function () {  //Paso datos a una vista.
    $peliculas =  [
      "End Game",
      "The Mule",
      "Creed",
      "Creed II",
      "The Expendables",
    ];

    //view(a,b=null) necesita 2 parámetros. El primero es el nombre del archivo vista. El segundo es un array asociativo en donde la clave es el nombre de la variable en la vista y el valor lleva los datos de la variable definida en la clave.
    // return view('movies',
    //   [
    //   "peliculas" => $peliculas,
    //   ]);

    // El array asociativo de view(a,b=null) se puede construir de 2 maneras:
    //Usando compac();
    $vac = compact('peliculas');
    return view('movies', $vac);
    //o
    //return view('welcome', compact('peliculas')); //En este caso compact usa el mismo nombre de la variable con datos para enviarla a la vista.

    //Usando with();
    // return view('welcome')->with('peliculas', $peliculas); //with() toma al primer parámetro como el nombre de la variable que envía a la vista. El segundo parámetro son los datos que colocará dentro de la variable. Usando with() se puede cambiar el nombre de la variable que se envía a la vista.

});

Route::get('/movies', 'MovieController@index');
Route::get('/addMovie', 'MovieController@create');
Route::post('/addMovie', 'MovieController@store');
Route::get('/actors', 'ActorController@index');
Route::get('/actors/search', 'ActorController@search');
Route::get('/actors/{id}', 'ActorController@show');





//
