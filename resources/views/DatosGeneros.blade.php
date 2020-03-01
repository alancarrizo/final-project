@extends('layouts.contenidoA')
@section('titulo')
  datos de generos
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
      <tr>
      @foreach ($generos as $genero)
        <td>{{$genero->id}}</td>
        <td>{{$genero->name}}</td>
        <a href="/genero/{{$genero->id}}/detalle">Detalle</a>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$generos->links()}}
</div>
@endsection
