@extends('layouts.contenidoA')
@section('titulo')
datos de actores
@endsection
@section('secciones')
<div class="">
<table class="table table-striped" >
  <thead>

    <th>ID</th>
    <th>NOMBRE</th>
    <th>DETALLE</th>
  </thead>
  <tbody>
    @foreach ($actores as $actor)
      <tr>
      <td>{{$actor->id}}</td>
      <td>{{$actor->first_name}}</td>
      <td> <a href="/actor/{{$actor->id}}/detalle" class="btn btn-info" >ver detalle</a>  </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$actores->links()}}
</div>
@endsection
