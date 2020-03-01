@extends('layouts.contenidoA')
@section('titulo')
DETALLES DE PELICULAS
@endsection

@section('secciones')

<table class="table table-striped">
  <thead>

    <th>id</th>
    <th>titulo</th>
    <th>rating</th>
    <th>premios</th>
    <th>fecha de estreno</th>
    <th>duracion</th>
    <th>genero</th>
  </thead>
  <tbody>
    <tr>
      <td>{{$pelicula->id}}</td>
      <td>{{$pelicula->title}}</td>
      <td>{{$pelicula->rating}}</td>
      <td>{{$pelicula->awards}}</td>
      <td>{{$pelicula->release_date}}</td>
      <td>{{$pelicula->length}}</td>
      <td>{{$pelicula->genre_id}}</td>


    </tr>
  </tbody>
</table>
 <h3>Actores participes</h3>
<ul>

  @foreach ($pelicula->Actor as $actor)
    <li>{{$actor->first_name}}</li>
  @endforeach

</ul>
@endsection
