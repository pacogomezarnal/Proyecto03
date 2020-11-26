@extends('layout.app')

@section('title', 'Alumnos. Gestión de Alumnos')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('alumnoStore')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Paco">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="apellido1">Apellido 1</label>
        <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Gómez">
      </div>
      <div class="form-group col-md-6">
        <label for="apellido2">Apellido 1</label>
        <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Arnal">
      </div>
    </div>
    <div class="form-group">
      <label for="correo">Correo</label>
      <input type="email" class="form-control" id="correo" name="correo" >
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
    </div>
</form>
@endsection
