@extends('layouts.app')

@section('titulo', 'Roles')

<!-- Main -->
@section('content')
  <div class="panel panel-default">
    <div class="panel-heading">Administración</div>
    <div class="panel-body">
      <h1>Roles</h1>
      <a href="{{ route('roles.create')}}" class="btn btn-primary"> Crear Rol</a>
      <table class="table table-bordered">
        <thead>
          <th>ID</th>
          <th>Nombre</th>
          <th>Accion</th>
        </thead>
        <tbody>
          @foreach ($roles as $rol)
            <tr>
              <td>{{$rol->id}}</td>
              <td>{{$rol->nombre}}</td>
              <td>
                <a href="{{route('roles.edit',$rol->id)}}" class="btn btn-sm btn-default">Editar</a>
                {!! Form::open(['route' => ['roles.destroy',$rol], 'method'=>'DELETE', 'class'=>'form-delete']) !!}
                {!! Form::submit('Eliminar',['class'=> 'btn btn-sm btn-danger'])!!}
                {!! Form::close() !!}

              </td>
            </tr>
          @endforeach

        </tbody>
      </table>
      {!! $roles->render() !!}
    </div>
  </div>
@endsection
