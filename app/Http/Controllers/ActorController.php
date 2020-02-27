<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorController extends Controller
{
  public function vista(){
    $actores = Actor::all();
    return view('movies_db', compact('actores'));
}
