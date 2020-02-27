@extends('layouts.contenido')
@section('yield')
<div class="">
  <form class="" action="/Actores" method="post">

    @csrf

    <label for="nombre"></label>
    <input type="text" name="nombre" value="{{old("nombre")}}">

    <label for="edad"></label>
    <input type="text" name="edad" value="{{old("edad")}}">

    <label for="apellido"></label>
    <input type="text" name="apellido" value="{{old("apellido")}}">

    @foreach ($actores as $actor)
      <option value="{{$actor->id}}">{{$actor->nombre, edad, apellido}}</option>
    @endforeach

    <input type="submit" name="enviar" value="enviar">

  </form>
</div>
@endsection
