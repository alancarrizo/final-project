@extends('layouts.contenidoA')
@section('titulo')

@endsection
@section('secciones')


<ul class="alert alert-danger" >
  @foreach ($errors->all() as $error)
    <li> {{$error}} </li>
  @endforeach
</ul>


  <form class="" action="/creActores" method="post">
@csrf

<label for="nombre">nombre</label>
<input type="text" name="nombre" value="{{old("nombre")}}">

<label for="apellido">apellido</label>
<input type="text" name="apellido" value="{{old("apellido")}}">

<label for="rating">rating</label>
<input type="number" step="any" name="rating" value="{{old("rating")}}">

<label for="pelfav"></label>

<select class="" name="pelfav">
  @foreach ($Pelicula as $peli)
    <option value="{{$peli->id}}"> {{$peli->title}} </option>
  @endforeach
</select>

<button type="submit" name="enviar">enviar</button>

  </form>
@endsection
