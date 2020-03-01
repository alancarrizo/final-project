@extends('contenidoA')
@section('titulo')
DETALLES DE GENEROS
@endsection

@section('secciones')

  <table class="table table-striped">
    <thead>

      <th>id</th>
      <th>nombre</th>
      <th>ranking</th>
      <th>estado</th>

    </thead>
    <tbody>
      <tr>
        <td>{{$genero->id}}</td>
        <td>{{$genero->name}}</td>
        <td>{{$genero->ranking}}</td>
        @if ($genero->active = 1)
          <span class="btn btn-success">Habilitado</span>
        @elseif ($genero->active = 0)
          <span class="btn btn-danger">Deshabilitado</span>  
        @endif


      </tr>
    </tbody>
  </table>
@endsection
