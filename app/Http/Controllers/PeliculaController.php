<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Género;

class PeliculaController extends Controller
{
  public function vista(){
    $peliculas = Pelicula::paginate(4);
    return view('DatosPelicula', compact('peliculas'));
}
public function detallePelicula($id){
  $pelicula = Pelicula::find($id);
return view('DatosPdetalles', compact('pelicula'));
}

public function form($id){
  $pelicula = Pelicula::find($id);
$generos = Género::all();
return view('FormEditPeli', compact('pelicula','generos'));
}

public function editar(Request $datos){


  $validacion = [
    "title"=> 'required|string|min:2|max:255',
    "rating"=> 'required|numeric',
    "awards"=> 'required|integer',
    "release_date"=> 'required',
    "length"=> 'required|integer',
    "genre_id"=> 'required',


  ];

    $reglas = [
    'string'=> 'El campo visual debe contener un texto',
    'required'=> 'El campo visual debe ser requerido',
    'integer'=> 'El campo visual debe ser un numero',
    'min'=> 'El campo visual debe contener :min caracteres',
    'max'=> 'El campo visual debe contener :max caracteres',
    'numeric'=> 'el campo debe ser numerico',

  ];

    $this->validate($datos, $validacion, $reglas);

    $pelicula = Pelicula::find($datos->id);


    $pelicula["title"] = $datos["title"];
    $pelicula["rating"] = $datos["rating"];
    $pelicula["awards"] = $datos["awards"];
    $pelicula["release_date"] = $datos["release_date"];
    $pelicula["lenght"] = $datos["lenght"];
    $pelicula["genre_id"] =$datos["genre_id"];


    $pelicula->save();

    return redirect('/peliculas');
}
}
