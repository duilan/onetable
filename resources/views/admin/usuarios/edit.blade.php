@extends('layouts.app')

@section('titulo', 'Editar Usuario')

<!-- Main -->
@section('content')
  <div class="panel panel-default">
    <div class="panel-heading">Administración</div>
    <div class="panel-body">
      <h1>Editar Usuario</h1>
      {!! Form::open(['route' => ['usuarios.update', $usuario], 'method'=>'PATCH']) !!}
      <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', $usuario->name , ['class'=> 'form-control' , 'required'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('email', 'E-mail') !!}
        {!! Form::text('email', $usuario->email , ['class'=> 'form-control' , 'required'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('password', 'Contraseña') !!}
        {!! Form::password('password', ['class'=> 'form-control' , 'required'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('rol_id', 'Rol') !!}
        {!! Form::select('rol_id', $listaRoles , $usuario->rol_id, ['class'=> 'form-control' , 'required'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('status', 'Estado') !!}
        {!! Form::select('status', ['activo'=>'Activo','inactivo'=>'Inactivo'] , $usuario->status, ['class'=> 'form-control' , 'required'])!!}
      </div>


      <div class="form-group">
        {!! Form::submit('Guardar cambios',['class'=> 'btn btn-primary'])!!}
        <a href = "{{route('usuarios.index')}}" class='btn btn-default'>Cancelar</a>
      </div>

      {!! Form::close() !!}
    </div>
  </div>
@endsection
