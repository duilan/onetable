@extends('layouts.app')

@section('titulo', 'Crear Usuario')

<!-- Main -->
@section('content')
  <div class="panel panel-default">
    <div class="panel-heading">Administración</div>
    <div class="panel-body">
      <h1>Crear Usuario</h1>
      {!! Form::open(['route' => 'usuarios.store', 'method'=>'POST']) !!}
      <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null , ['class'=> 'form-control' , 'required'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('email', 'E-mail') !!}
        {!! Form::text('email', null , ['class'=> 'form-control' , 'required'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('password', 'Contraseña') !!}
        {!! Form::password('password', ['class'=> 'form-control' , 'required'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('rol_id', 'Rol') !!}
        {!! Form::select('rol_id', $listaRoles ,null, ['class'=> 'form-control' , 'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::submit('Crear rol',['class'=> 'btn btn-primary'])!!}
        <a href = "{{route('usuarios.index')}}" class='btn btn-default'>Cancelar</a>
      </div>

      {!! Form::close() !!}
    </div>
  </div>
@endsection
