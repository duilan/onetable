@extends('layouts.app')

@section('titulo', 'Usuarios')

<!-- Main -->
@section('content')
  <div class="panel panel-default">
    <div class="panel-heading">Adminitración</div>
    <div class="panel-body">
      <h1>Usuarios</h1>
      <a href="{{ route('usuarios.create')}}" class="btn btn-primary"> Crear Usuario</a>
      <table class="table table-bordered">
        <thead>
          <th>ID</th>
          <th>Nombre</th>
          <th>E-mail</th>
          <th>Rol</th>
          <th>Estado</th>
          <th>Accion</th>
        </thead>
        <tbody>
          @foreach ($usuarios as $usuario)
            <tr>
              <td>{{$usuario->id}}</td>
              <td>{{$usuario->name}}</td>
              <td>{{$usuario->email}}</td>
              <td>{{$usuario->rol->nombre}}</td>
              <td>{{$usuario->status}}</td>
              <td>
                <a href="{{ route('usuarios.edit', $usuario->id)}}" class="btn btn-sm btn-info">Edit</a>
                {!! Form::open(['route' => ['usuarios.destroy',$usuario], 'method'=>'DELETE', 'class'=>'form-delete']) !!}
                {!! Form::submit('Eliminar',['class'=> 'btn btn-sm btn-danger'])!!}
                {!! Form::close() !!}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {!! $usuarios->render() !!}
    </div>
  </div>
@endsection
