@extends('layouts.contenidoA')
@section('titulo')
  datos de peliculas
@endsection
@section('secciones')
<div class="">
  <table class="table table-striped" >
    <thead>

      <th>ID</th>
      <th>NOMBRE</th>
      <th>DETALLE</th>
      <th>EDITAR</th>
    </thead>
    <tbody>
      @foreach ($peliculas as $pelicula)
        <tr>
        <td>{{$pelicula->id}}</td>
        <td>{{$pelicula->title}}</td>
        <td> <a href="/pelicula/{{$pelicula->id}}/detalle" class="btn btn-info" >ver detalle</a>  </td>
        <td> <a href="/editarpelicula/{{$pelicula->id}}/editar">Editar Pelicula</a> </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$peliculas->links()}}
</div>
@endsection
