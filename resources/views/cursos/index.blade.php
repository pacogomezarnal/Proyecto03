@extends('layout.app')

@section('title', 'Alumnos. Gestión de Alumnos')

@section('content')

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Tipo</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cursos as $curso)
      <tr>
        <th scope="row">{{$curso->id}}</th>
        <td >{{$curso->nombre}}</td>
        <td >{{$curso->tipo}}</td>
        <td ><a href="{{route('cursos.show',['curso'=>$curso])}}"><i class="far fa-eye"></i></a>&nbsp;
            <a href="{{route('cursos.edit',['curso'=>$curso])}}"><i class="far fa-edit"></i></a>&nbsp;
            <a href="{{route('cursos.entregables.create',['curso'=>$curso])}}"><i class="fas fa-plus-circle"></i></a>&nbsp;
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#entregables{{$curso->id}}">
                Entregables
            </button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#borrar{{$curso->id}}">
                Borrar
            </button>
            <!-- Modal Entregable-->
            <div class="modal fade" id="entregables{{$curso->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Entregables</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        @foreach ($curso->entregables as $entregable)
                        <p>{{$entregable->id}} {{$entregable->nombre}} {{$entregable->fecha_ini}} {{$entregable->fecha_fin}}</p>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
             <!-- Modal Borrar-->
            <div class="modal fade" id="borrar{{$curso->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Borrar curso {{$curso->id}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('cursos.destroy',['curso'=>$curso])}}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <div class="form-group">
                                <input type="submit" class="btn btn-danger delete-user" value="Delete">
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
