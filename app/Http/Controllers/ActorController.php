<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Pelicula;

class ActorController extends Controller
{
  public function vista(){
    $actores = Actor::paginate(5);
    return view('DatosActores', compact('actores'));
}
public function detalleActor($id){
  $actor = Actor::find($id);
return view('DatosAdetalles', compact('actor'));
}

public function form(){
  $Pelicula = Pelicula::all();
  return view('formularioActores', compact('Pelicula'));
}


public function guardar(Request $datos){
  $validacion = [

    "nombre"=> 'required|string',
    "apellido"=> 'required|string',
    "ranking"=> 'required|numeric',
    "pelifav"=> 'required'

  ];

    $reglas = [
    'string'=> 'El campo visual debe contener un texto',
    'required'=> 'El campo visual debe ser requerido',
    'numeric'=> 'El campo visual debe contener alfa numerico',];

    $this->validate($datos, $validacion, $reglas);

    $actor = new Actor();

    $actor["first_name"] = $datos["nombre"];
    $actor["last_name"] = $datos["apellido"];
    $actor["ranking"] = $datos["ranking"];
    $actor["favorite_movie_id"] = $datos["pelisfav"];

    $actor->save();

    return redirect('/home');
}
}
