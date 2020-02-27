@extends('layouts.contenido')
@section('yield')
<div class="">
  <form class="" action="/Géneros" method="post">

    @csrf

    <label for="nombre"></label>
    <input type="text" name="nombre" value="{{old("nombre")}}">


    @foreach ($generos as $genero)
      <option value="{{$genero->id}}">{{$genero->nombre}}</option>
    @endforeach

  </form>
</div>
@endsection
