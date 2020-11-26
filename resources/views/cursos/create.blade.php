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

<form action="{{route('cursos.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ejemplo Proyecto">
    </div>
    <div class="form-group">
        <label for="tipo">Tipo Proyecto</label>
        <select class="form-control" id="tipo" name="tipo">
          <option value="Proyecto">Proyecto</option>
          <option value="Seminario">Seminario</option>
          <option value="Error">Error</option>
        </select>
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
    </div>
</form>
@endsection
