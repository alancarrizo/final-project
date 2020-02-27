@extends('layouts.contenido')
@section('yield')
<div class="">
  <form class="" action="/Pelicula" method="post">

    @csrf

    <label for="nombre"></label>
    <input type="text" name="nombre" value="{{old("nombre")}}">

    <label for="duracion"></label>
    <input type="text" name="duracion" value="{{old("duracion")}}">

    <label for="genero"></label>
    <input type="text" name="genero" value="{{old("genero")}}">

    @foreach ($peliculas as $pelicula)
      <option value="{{$pelicula->id}}">{{$pelicula->nombre, duracion, genero}}</option>
    @endforeach

  </form>
</div>
@endsection
