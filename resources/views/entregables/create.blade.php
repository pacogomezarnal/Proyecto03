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

<form action="{{route('cursos.entregables.store',['curso'=>$curso])}}" method="post">
    @csrf
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ejemplo Entregable">
    </div>
    <div class="form-group">
        <label for="fecha_ini">Fecha inicio</label>
        <input type="date" id="fecha_ini" name="fecha_ini" value="2020-12-01" min="2020-01-12" max="2021-12-31">
    </div>
    <div class="form-group">
        <label for="fecha_ini">Fecha final</label>
        <input type="date" id="fecha_fin" name="fecha_fin" value="2020-12-01" min="2020-01-12" max="2021-12-31">
    </div>
    <div class="form-group">
        <label for="nombreProyecto">Nombre del proyecto</label>
        <input type="text" class="form-control" id="nombreProyecto" value="{{$curso->nombre}}" readonly>
        <input id="curso" name="curso_id" type="hidden" value="{{$curso->id}}" >
      </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
    </div>
</form>
@endsection
