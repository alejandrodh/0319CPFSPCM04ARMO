<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //Optativos en caso de no respetar el standard.
    //public $table = "movies"; //Si mi tabla no se llama "movies" debemos declarar el nombre en la base de datos.
    //public $primaryKey = "id_Pelicula"; //Si la clave primaria de la tabla tiene un nombre diferente a "id"
    //public $timestamps = false; //Si en la tabla no están creados los campos "created_at" y "updated_at"


    //obligatorio para guardar datos: $guarded o $fillable
    public $guarded = []; //identifcar los campos que NO puedo asignar masivamente. Vacío permite todo.

    // public $fillable = []; //identifcar los campos que SI puedo asignar masivamente. Vacío impide todo.

}
