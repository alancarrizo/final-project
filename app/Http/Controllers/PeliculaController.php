<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genero;
use App\Pelicula;

class PeliculaController extends Controller
{
  public function vista(){
    $pelicula = Pelicula::all();
    return view('movies_db', compact('peliculas'));

}
public function paraguardar(Request $datos){
  $validacion = [
    "nombre"=> 'required|string|min:2|max:255',
    "duracion"=> 'required|integer',
    "genero"=> 'required',];

    $reglas = [
    'string'=> 'El campo visual debe contener un texto',
    'required'=> 'El campo visual debe ser requerido',
    'integer'=> 'El campo visual debe ser un numero',
    'min'=> 'El campo visual debe contener :min caracteres',
    'max'=> 'El campo visual debe contener :max caracteres',];

    $this->validate($datos, $validacion, $reglas);

    $pelicula = new Pelicula();

    $pelicula["nombre"] = $datos["nombre"];
    $pelicula["duracion"] = $datos["duracion"];
    $pelicula["genero_id"] = $datos["genero"];

    $pelicula->save();

    return redirect('/home');
}
}
