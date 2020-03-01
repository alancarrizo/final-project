@extends('layouts.contenidoA')
@section('titulo')

@endsection
@section('secciones')


  <ul class="alert alert-danger" >
    @foreach ($errors->all() as $error)
      <li> {{$error}} </li>
    @endforeach
  </ul>



@endsection

<form class="" action="/editarpelicula" method="post">
  @csrf
@method('put')

<input type="hidden" name="id" value="{{$pelicula->id}}">

<label for="title">titulo</label>
<input type="text" name="title" value="{{$pelicula->title}}">

<label for="rating">rating</label>
<input type="number" step="any" name="rating" value="{{$pelicula->rating}}">

<label for="awards">premios</label>
<input type="number" name="awards" value="{{$pelicula->awards}}">

<label for="release_date">lanzamiento</label>
<input type="numer" step="any" name="release_date" value="{{$pelicula->release_date}}">

<label for="lenght">duracion</label>
<input type="number" name="lenght" value="{{$pelicula->length}}">

  <label for="genre_id"></label>
  <select class="" name="genre_id">

  @foreach ($generos as $genero)
    <option value="{{$genero->id}}"> {{$genero->name}} </option>
  @endforeach
</select>

<button type="submit" name="enviar">enviar</button>

</form>
