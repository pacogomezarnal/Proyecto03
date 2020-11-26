@extends('layout.app')

@section('title', 'Alumnos. Gestión de Alumnos')

@section('content')

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Editar</th>
        </tr>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido 1</th>
        <th scope="col">Apellido 2</th>
        <th scope="col">Correo</th>
        <th scope="col">Ver</th>
        <th scope="col">Editar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{$alumno->id}}</th>
        <td >{{$alumno->nombre}}</td>
        <td >{{$alumno->apellido1}}</td>
        <td >{{$alumno->apellido2}}</td>
        <td >{{$alumno->correo}}</td>
        <td ><a href="alumno.php?id="><i class="far fa-eye"></i></a></td>
        <td ><a href="edit.php?id="><i class="far fa-edit"></i></a></td>
      </tr>
    </tbody>
  </table>

  
@endsection
