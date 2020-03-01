@extends('layouts.contenidoA')
@section('titulo')
DETALLES DE ACTORES
@endsection

@section('secciones')

<table class="table table-striped">
  <thead>

    <th>id</th>
    <th>nombre</th>
    <th>apellido</th>
    <th>rating</th>
    <th>pelicula favorita</th>
  </thead>
  <tbody>
    <tr>
      <td>{{$actor->id}}</td>
      <td>{{$actor->first_name}}</td>
      <td>{{$actor->last_name}}</td>
      <td>{{$actor->rating}}</td>
      @if ($actor->favorite_movie_id = true)
        <td>{{$actor->favorite_movie_id}}</td>
        @else
          <span>el actor tiene pelicula favorita</span>
      @endif
    </tr>
  </tbody>
</table>

<h3>peliculas participes</h3>
<ul>

 @foreach ($actor->Pelicula as $Pelicula)
   <li>{{$Pelicula->title}}</li>
 @endforeach

</ul>

@endsection
