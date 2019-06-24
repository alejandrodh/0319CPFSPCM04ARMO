<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $peliculas =  [
      //   "End Game",
      //   "The Mule",
      //   "Creed",
      //   "Creed II",
      //   "The Expendables",
      // ];

      $peliculas = Movie::all(); //Todos los datos de la tabla.
      // $peliculas = Movie::where('rating', '>', 4)
      // ->orderBy('rating')
      // ->get();

      // $peliculas = Movie::where('title', 'like', '%samente')
      // ->orderBy('rating')
      // ->get();

      $vac = compact('peliculas');
      return view('movies', $vac);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addMovie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   //dd($request);
        $rules = [
          'title' => 'filled|string|max:50',
          'rating'=> 'filled|integer',
          'imagen'=> 'image', //jpg, jpeg, png, bmp, svg
        ];
        $messages = [
          'filled' =>':attribute debe estar completo.',
          'string' =>':attribute debe ser cadena de texto.',
          'max' => ':attribute debe tener como máximo 50 caracteres',
          'integer' => ':attribute debe ser numérico.',
          'image'=>'El archivo deber ser de tipo imagen.'
        ];

        $this->validate($request, $rules, $messages);

        $path = $request->file('imagen')->store('public/poster');
        $file = basename($path);

        $movie = new Movie; //crear instancia de la clase.
        //Asignar datos al objeto.
        $movie->title = $request->title;
        $movie->rating = $request->rating;
        $movie->awards = $request->awards;
        $movie->length = $request->length;
        $movie->image = $file;
        $movie->release_date = $request->release_date;

        //Guardar el objeto en db. Revisar que el modelo tenga $guarded o $fillable
        $movie->save(); //save() también sirve para hacer actualización.

        return redirect('/movies');

        // dd($request, $movie);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function nombreMetodo()
    {

    }
}
