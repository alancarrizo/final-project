<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Género;

class GéneroController extends Controller
{
  public function vista(){
    $generos = Género::paginate(6);
    return view('DatosGeneros', compact('generos'));
}
public function detalleGénero($id){
  $genero = Género::find($id);
return view('DatosGdetalles', compact('genero'));
}
}
