<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GéneroController extends Controller
{
  public function vista(){
    $genero = Genero::all();
    return view('movies_db', compact('generos'));
}
